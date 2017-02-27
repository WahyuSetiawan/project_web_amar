<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
use \frontend\models\NilaiModel;

class OrtuController extends Controller {

    public function actionIndex() {
        if (!\Yii::$app->user->isGuest) {
            if (\Yii::$app->user->identity->level_user == 4) {
                $siswa = \frontend\models\OrtusiswaModel::find()->where(['id_ortu' => Yii::$app->user->identity->username])->all();
                return $this->render('index', ['siswa' => $siswa]);
            } else {
                echo "<script> alert('Harus Login Sebagai User Orang Tua Terlebih dahulu');location.href = '?r=site'</script>";
            }
        } else {
            echo "<script> alert('Harus Login Terlebih dahulu');location.href = '?r=site'</script>";
        }
    }

    public function actionUbahpassword() {
        if (!\Yii::$app->user->isGuest) {
            if (\Yii::$app->user->identity->level_user == 3) {
                $siswa = \frontend\models\SiswaModel::findOne(Yii::$app->request->get('id'));

                $password1 = Yii::$app->request->post('password1');
                $password2 = Yii::$app->request->post('password2');
                $password3 = Yii::$app->request->post('password3');

                if ($password1 != NULL) {
                    $user = \frontend\models\UsersiswaModel::findOne(Yii::$app->request->get('id'));
                    if (($user->password == sha1($password1)) && ($password2 == $password3)) {
                        $user->password = sha1($password2);
                        $user->save();
                    }
                }

                return $this->render('ubahpassword', ['siswa' => $siswa]);
            }
        } else {
            echo "<script> alert('Harus Login Terlebih dahulu');location.href = '?r=site'</script>";
        }
    }

    public function actionNilai() {
        if (!\Yii::$app->user->isGuest) {
            if (\Yii::$app->user->identity->level_user == 3 && \Yii::$app->user->identity->username === Yii::$app->request->get('id')) {
                $request = Yii::$app->request;
                $kelasurutan = NilaiModel::find()->select('tahun_ajaran')->distinct()->where(['nis' => $request->get('id')])->all();
                $kelas = array();
                foreach ($kelasurutan as $value) {
                    $kelasa = $value->tahun_ajaran;
                    $hari = NilaiModel::find()->select('semester')->distinct()->where(['tahun_ajaran' => $kelasa])->all();

                    foreach ($hari as $valueHari) {
                        $kelas[$kelasa][$valueHari->semester] = NilaiModel::find()->orderBy('id')->where(['semester' => $valueHari->semester, 'tahun_ajaran' => $kelasa])->all();
                    }
                }

                return $this->render('nilai', ['kelas' => $kelas]);
            }
        } else {
            echo "<script> alert('Harus Login Terlebih dahulu');location.href = '?r=site'</script>";
        }
    }

    public function actionDaftarsiswa() {
        if (!\Yii::$app->user->isGuest) {
            if (\Yii::$app->user->identity->level_user == 4) {
                $siswa = \frontend\models\SiswaModel::find()->joinWith('siswa_kelas')->where(['ortu_siswa' => Yii::$app->user->identity->username])->all();
                return $this->render('daftarsiswa', ['siswa' => $siswa]);
            } else {
                echo "<script> alert('Harus Login Sebagai User Orang Tua Terlebih dahulu');location.href = '?r=site'</script>";
            }
        } else {
            echo "<script> alert('Harus Login Terlebih dahulu');location.href = '?r=site'</script>";
        }
    }

}
