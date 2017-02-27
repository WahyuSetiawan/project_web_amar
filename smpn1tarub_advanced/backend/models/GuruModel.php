<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guru".
 *
 * @property string $nip
 * @property string $nama_guru
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property string $jk
 * @property string $agama
 * @property string $foto
 * @property string $pend_akhir
 * @property string $alamat
 * @property string $email
 * @property string $telepon
 * @property integer $level_user
 *
 * @property Materi[] $materis
 * @property Pengajar[] $pengajars
 * @property User $user
 */
class GuruModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'guru';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nip', 'nama_guru', 'tempat_lahir', 'tgl_lahir', 'jk', 'agama', 'foto', 'pend_akhir', 'alamat', 'email', 'telepon', 'level_user'], 'required'],
            [['tgl_lahir'], 'safe'],
            [['jk', 'agama', 'alamat'], 'string'],
            [['level_user'], 'integer'],
            [['nip', 'nama_guru', 'email'], 'string', 'max' => 50],
            [['tempat_lahir', 'foto'], 'string', 'max' => 20],
            [['pend_akhir'], 'string', 'max' => 10],
            [['telepon'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nip' => 'Nip',
            'nama_guru' => 'Nama Guru',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'jk' => 'Jk',
            'agama' => 'Agama',
            'foto' => 'Foto',
            'pend_akhir' => 'Pend Akhir',
            'alamat' => 'Alamat',
            'email' => 'Email',
            'telepon' => 'Telepon',
            'level_user' => 'Level User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMateris()
    {
        return $this->hasMany(Materi::className(), ['nip' => 'nip']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPengajars()
    {
        return $this->hasMany(Pengajar::className(), ['nip' => 'nip']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['username' => 'nip']);
    }
}
