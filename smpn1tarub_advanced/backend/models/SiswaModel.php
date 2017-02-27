<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "siswa".
 *
 * @property string $nis
 * @property string $nama_siswa
 * @property string $jk
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property string $alamat
 * @property string $agama
 * @property string $thn_masuk
 * @property string $status
 * @property string $asal_sekolah
 * @property string $kota_ijazah
 * @property string $foto
 * @property string $email
 * @property string $telepon
 * @property integer $level_user
 *
 * @property Nilai[] $nilais
 * @property SiswaKelas[] $siswaKelas
 * @property UserSiswa $userSiswa
 */
class SiswaModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'siswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nis', 'nama_siswa'], 'required'],
            [['jk', 'alamat', 'agama'], 'string'],
            [['tgl_lahir', 'thn_masuk'], 'safe'],
            [['level_user'], 'integer'],
            [['nis', 'asal_sekolah', 'kota_ijazah', 'foto', 'email'], 'string', 'max' => 50],
            [['nama_siswa'], 'string', 'max' => 100],
            [['tempat_lahir', 'status'], 'string', 'max' => 20],
            [['telepon'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nis' => 'Nis',
            'nama_siswa' => 'Nama Siswa',
            'jk' => 'Jk',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'alamat' => 'Alamat',
            'agama' => 'Agama',
            'thn_masuk' => 'Thn Masuk',
            'status' => 'Status',
            'asal_sekolah' => 'Asal Sekolah',
            'kota_ijazah' => 'Kota Ijazah',
            'foto' => 'Foto',
            'email' => 'Email',
            'telepon' => 'Telepon',
            'level_user' => 'Level User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNilais()
    {
        return $this->hasMany(Nilai::className(), ['nis' => 'nis']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiswaKelas()
    {
        return $this->hasMany(SiswaKelas::className(), ['nis' => 'nis']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserSiswa()
    {
        return $this->hasOne(UserSiswa::className(), ['username' => 'nis']);
    }
}
