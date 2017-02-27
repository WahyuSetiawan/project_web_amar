<?php

namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class MateriController extends Controller {

    public function actionIndex() {
        // data enviroment
        if (\Yii::$app->request->get('tahun_ajaran')) {
            $__tahun_ajaran = \Yii::$app->request->get('tahun_ajaran');
        } else {
            $__tahun_ajaran = \frontend\models\TahunajaranModel::find()->orderBy(['created' => SORT_DESC])->limit(1)->all()[0]->tahun_ajaran;
        }

        $a = date('m');
        if ($a > 7) {
            $__semester = 'Ganjil';
        } else {
            $__semester = 'Genap';
        }

        if (\Yii::$app->user->isGuest) {
            $search = "and materi.Status = 'Publish'";
        } else {
            $search = '';
        }

        $tahunajaran = \frontend\models\MateriModel::find()->select('tahun_ajaran')->distinct()->all();
        $semester = \frontend\models\MateriModel::find()->select('semester')->distinct()->all();

        // data variable
        $materi = Yii::$app->db->createCommand("select mapel.mapel, COUNT(mapel.mapel) as jumlah, guru.nama_guru from mapel inner join materi on mapel.kode_mapel = materi.mapel inner join guru on guru.nuptk = materi.nuptk INNER JOIN tahun_ajaran on tahun_ajaran.tahun_ajaran = materi.tahun_ajaran inner join semester on semester.semester = materi.semester where materi.semester = '" . $__semester . "' and materi.tahun_ajaran = '" . $__tahun_ajaran . "' " . $search . " GROUP BY mapel.mapel,  guru.nama_guru");
        $materiResult = $materi->queryAll();

        return $this->render('index', [
                    'materiresult' => $materiResult,
                    'tahunajaran' => $tahunajaran,
                    'semester' => $semester,
                    'semestersekarang' => $__semester,
                    'tahunajaransekarang' => $__tahun_ajaran
        ]);
    }

    public function actionMateridetail() {
        $search['tahun_ajaran'] = \Yii::$app->request->get('tahun_ajaran');
        $search['semester'] = \Yii::$app->request->get('semester');

        if (\Yii::$app->user->isGuest) {
            $search['Status'] = 'Publish';
        }
       
        $materiResult = \frontend\models\MateriModel::find()->where($search)->all();

        return $this->render('materidetail', ['materiresult' => $materiResult]);
    }

    public function actionUploadmateri() {
        $model = new \frontend\models\MateriModel();

        if (\Yii::$app->request->get('tahun_ajaran')) {
            $__tahun_ajaran = \Yii::$app->request->get('tahun_ajaran');
        } else {
            $__tahun_ajaran = \frontend\models\TahunajaranModel::find()->orderBy(['created' => SORT_DESC])->limit(1)->all()[0]->tahun_ajaran;
        }

        $a = date('m');
        if ($a > 7) {
            $__semester = 'Ganjil';
        } else {
            $__semester = 'Genap';
        }
        $search['tahun_ajaran'] = $__tahun_ajaran;
        $search['semester'] = $__semester;

        if (\Yii::$app->user->isGuest) {
            echo "<script> alert('Harus Login Terlebih dahulu');location.href = '?r=site'</script>";
        } else {
            if (\Yii::$app->user->identity->level_user != 2) {
                echo "<script> alert('Harus Login Terlebih dahulu');location.href = '?r=site'</script>";
            }
            if (\Yii::$app->request->isPost) {
                $model->file = \yii\web\UploadedFile::getInstance($model, 'file');

                if ($model->file) {
                    $namafile = 'uploads/' . $model->file->baseName . '.' . $model->file->extension;
                    $model->file->saveAs($namafile, FALSE);

                    $modelsave = new \frontend\models\MateriModel();

                    $post = \Yii::$app->request->post()["MateriModel"];

                    $modelsave->mapel = $post['mapel'];
                    $modelsave->judul_materi = $post['judul_materi'];
                    $modelsave->deskripsi = $post['deskripsi'];
                    $modelsave->Status = $post['status'];
                    $modelsave->nuptk = \Yii::$app->user->identity->username;
                    $modelsave->tahun_ajaran = $__tahun_ajaran;
                    $modelsave->semester = $__semester;
                    $modelsave->locationfile = $namafile;

                    $modelsave->save();
                }
            }

            $mapel = \frontend\models\MapelModel::find()->joinWith('pengajar')->where(['nuptk' => \Yii::$app->user->identity->username])->all();
            $materi = \frontend\models\MateriModel::find()->where($search)->all();
            $tahunajaran = \frontend\models\MateriModel::find()->select('tahun_ajaran')->distinct()->all();
            $semester = \frontend\models\MateriModel::find()->select('semester')->distinct()->all();

            return $this->render('uploadmateri', [
                        'materi' => $materi,
                        'mapel' => $mapel,
                        'tahunajaran' => $tahunajaran,
                        'semester' => $semester,
                        "model" => $model,
                        'semestersekarang' => $__semester,
                        'tahunajaransekarang' => $__tahun_ajaran
            ]);
        }
    }

    public function actionChangeprivate() {
        if (!\Yii::$app->user->isGuest) {
            if (\Yii::$app->user->identity->level_user == 2) {
                $materi = \frontend\models\MateriModel::findOne(['id_materi' => \Yii::$app->request->get('id')]);
                $materi->Status = 'Private';
                $materi->save();
            }
            $this->goBack('?r=materi/uploadmateri');
        } else {
            echo "<script> alert('Harus Login Terlebih dahulu');location.href = '?r=site'</script>";
        }
    }

    public function actionChangepublic() {
        if (!\Yii::$app->user->isGuest) {
            if (\Yii::$app->user->identity->level_user == 2) {
                $materi = \frontend\models\MateriModel::findOne(['id_materi' => \Yii::$app->request->get('id')]);
                $materi->Status = 'Publish';
                $materi->save();
            }

            $this->goBack('?r=materi/uploadmateri');
        } else {
            echo "<script> alert('Harus Login Terlebih dahulu');location.href = '?r=site'</script>";
        }
    }

}
