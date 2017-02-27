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

class GuruController extends Controller {

    public function actionIndex() {
        $guru = \frontend\models\GuruModel::find()->all();

        return $this->render('guru', ['guru' => $guru]);
    }

    public function actionProfile() {
        $request = Yii::$app->request;

        if (\Yii::$app->user->isGuest) {
            $guru = \frontend\models\GuruModel::findOne($request->get('id'));
            $mapel = \frontend\models\PengajarModel::find()->where(['nuptk' => $guru->nuptk])->all();

            return $this->render('profile', ['guru' => $guru, 'mapel' => $mapel]);
        } else {
            $guru = \frontend\models\GuruModel::findOne($request->get('id'));
            $mapel = \frontend\models\PengajarModel::find()->where(['nuptk' => $guru->nuptk])->all();

            if ($request->get('id') == \Yii::$app->user->identity->username) {
                return $this->render('profile', ['guru' => $guru, 'tampil' => true, 'mapel' => $mapel]);
            } else {
                return $this->render('profile', ['guru' => $guru, 'tampil' => FALSE, 'mapel' => $mapel]);
            }
        }
    }

    public function actionProfileguru() {
        $request = \Yii::$app->request;
        $guru = \frontend\models\GuruModel::findOne($request->get('id'));

        if ($guru->load($request->post()) && $guru->save()) {
            echo 'berhasil';
        }

        return $this->render('profileguru', ['guru' => $guru]);
    }

}
