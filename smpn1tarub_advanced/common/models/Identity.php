<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\helpers\Security;
use yii\web\IdentityInterface;
use common\models;

class Identity implements \yii\web\IdentityInterface {

    public $user;

    public function getAuthKey() {
        return static::$user->auth_key;
    }

    public function getId() {
        return static::$user->getPrimaryKey();
    }

    public function validateAuthKey($authKey) {
        return static::$user->auth_key === $this->getAuthKey();
    }

    public static function findIdentity($id) {
        $usermodel = UsersiswaModel::findOne($id);
        if (count($usermodel) == 0) {
            $usermodel = null;
        } else {
            $user = $usermodel;
            return $usermodel;
        }

        $usermodel = UserguruModel::findOne($id);
        if (count($usermodel) == 0) {
            $usermodel = null;
        } else {
            $user = $usermodel;
            return $usermodel;
        }
        
        $usermodel = UserortuModel::findOne($id);
        if (count($usermodel) == 0) {
            $usermodel = null;
        } else {
            $user = $usermodel;
            return $usermodel;
        }
        
        $usermodel = UseradminModel::findOne($id);
        if (count($usermodel) == 0) {
            $usermodel = null;
        } else {
            $user = $usermodel;
            return $usermodel;
        }

        return $usermodel;
    }

    public static function findIdentityByAccessToken($token, $type = null) {
        $expire = \Yii::$app->params['user.passwordResetTokenExpire'];
        $parts = explode('_', $token);
        $timestamp = (int) end($parts);
        if ($timestamp + $expire < time()) {
            // token expired
            return null;
        }

        return static::findOne([
                    'password_reset_token' => $token
        ]);
    }

    public function validatePassword($password) {
        $mlebu = static::$user->password === md5($password);
        return $mlebu;
    }

}
