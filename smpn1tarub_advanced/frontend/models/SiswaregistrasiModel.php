<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "siswa_registrasi".
 *
 * @property string $no_registrasi
 * @property string $nama_siswa
 * @property string $jk
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property string $alamat
 * @property string $agama
 * @property string $asal_sekolah
 * @property string $kota_ijazah
 * @property string $foto
 * @property string $email
 */
class SiswaregistrasiModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'siswa_registrasi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['no_registrasi', 'nama_siswa'], 'required'],
            [['jk', 'alamat', 'agama'], 'string'],
            [['tgl_lahir'], 'safe'],
            [['no_registrasi', 'tempat_lahir', 'asal_sekolah', 'kota_ijazah', 'foto', 'email'], 'string', 'max' => 50],
            [['nama_siswa'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'no_registrasi' => 'No Registrasi',
            'nama_siswa' => 'Nama Siswa',
            'jk' => 'Jk',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'alamat' => 'Alamat',
            'agama' => 'Agama',
            'asal_sekolah' => 'Asal Sekolah',
            'kota_ijazah' => 'Kota Ijazah',
            'foto' => 'Foto',
            'email' => 'Email',
        ];
    }
}
