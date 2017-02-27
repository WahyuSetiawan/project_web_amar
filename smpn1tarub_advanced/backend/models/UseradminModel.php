<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_admin".
 *
 * @property string $username
 * @property string $nama_lengkap
 * @property string $password
 * @property integer $level_user
 * @property string $keterangan
 *
 * @property Admin $username0
 * @property LevelUser $levelUser
 */
class UseradminModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'level_user', 'keterangan'], 'required'],
            [['level_user'], 'integer'],
            [['username', 'nama_lengkap', 'password'], 'string', 'max' => 50],
            [['keterangan'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'nama_lengkap' => 'Nama Lengkap',
            'password' => 'Password',
            'level_user' => 'Level User',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsername0()
    {
        return $this->hasOne(Admin::className(), ['username' => 'username']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLevelUser()
    {
        return $this->hasOne(LevelUser::className(), ['level_user' => 'level_user']);
    }
}
