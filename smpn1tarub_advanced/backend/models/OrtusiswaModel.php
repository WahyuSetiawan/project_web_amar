<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ortu_siswa".
 *
 * @property string $id_ortu
 * @property string $nama_ortu
 * @property string $alamat_ortu
 * @property string $jk
 * @property string $agama
 * @property string $pekerjaan
 * @property string $Pangkat
 * @property string $Intansi
 * @property string $alamat_instansi
 * @property string $foto
 * @property string $email
 * @property integer $telepon
 * @property integer $level_user
 *
 * @property UserOrtusiswa $userOrtusiswa
 */
class OrtusiswaModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ortu_siswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_ortu', 'nama_ortu', 'level_user'], 'required'],
            [['alamat_ortu', 'jk', 'agama', 'alamat_instansi'], 'string'],
            [['telepon', 'level_user'], 'integer'],
            [['id_ortu', 'nama_ortu', 'Pangkat', 'Intansi', 'email'], 'string', 'max' => 50],
            [['pekerjaan', 'foto'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_ortu' => 'Id Ortu',
            'nama_ortu' => 'Nama Ortu',
            'alamat_ortu' => 'Alamat Ortu',
            'jk' => 'Jk',
            'agama' => 'Agama',
            'pekerjaan' => 'Pekerjaan',
            'Pangkat' => 'Pangkat',
            'Intansi' => 'Intansi',
            'alamat_instansi' => 'Alamat Instansi',
            'foto' => 'Foto',
            'email' => 'Email',
            'telepon' => 'Telepon',
            'level_user' => 'Level User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserOrtusiswa()
    {
        return $this->hasOne(UserOrtusiswa::className(), ['username' => 'id_ortu']);
    }
}
