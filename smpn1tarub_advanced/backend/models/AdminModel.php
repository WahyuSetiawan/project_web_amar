<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property string $username
 * @property string $password
 * @property string $keterangan
 * @property string $nama_lengkap
 * @property string $email
 * @property string $telephone
 * @property string $level_user
 *
 * @property User $user
 */
class AdminModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'keterangan', 'nama_lengkap', 'email', 'telephone', 'level_user'], 'required'],
            [['username', 'password', 'keterangan', 'email'], 'string', 'max' => 50],
            [['nama_lengkap'], 'string', 'max' => 100],
            [['telephone'], 'string', 'max' => 20],
            [['level_user'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'password' => 'Password',
            'keterangan' => 'Keterangan',
            'nama_lengkap' => 'Nama Lengkap',
            'email' => 'Email',
            'telephone' => 'Telephone',
            'level_user' => 'Level User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['username' => 'username']);
    }
}
