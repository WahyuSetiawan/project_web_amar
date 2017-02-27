<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_siswa".
 *
 * @property string $username
 * @property string $nama_lengkap
 * @property string $password
 * @property integer $level_user
 * @property string $keterangan
 *
 * @property LevelUser $levelUser
 * @property Siswa $username0
 */
class UsersiswaModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_siswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'nama_lengkap', 'password', 'level_user', 'keterangan'], 'required'],
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
    public function getLevelUser()
    {
        return $this->hasOne(LevelUser::className(), ['level_user' => 'level_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsername0()
    {
        return $this->hasOne(Siswa::className(), ['nis' => 'username']);
    }
}
