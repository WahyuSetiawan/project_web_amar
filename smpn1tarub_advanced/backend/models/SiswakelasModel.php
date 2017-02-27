<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "siswa_kelas".
 *
 * @property integer $id
 * @property string $id_kelas
 * @property string $nis
 * @property string $tahun_ajaran
 *
 * @property Kelas $idKelas
 * @property Siswa $nis0
 * @property TahunAjaran $tahunAjaran
 */
class SiswakelasModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'siswa_kelas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kelas', 'nis', 'tahun_ajaran'], 'required'],
            [['id_kelas', 'tahun_ajaran'], 'string', 'max' => 12],
            [['nis'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_kelas' => 'Id Kelas',
            'nis' => 'Nis',
            'tahun_ajaran' => 'Tahun Ajaran',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdKelas()
    {
        return $this->hasOne(Kelas::className(), ['id_kelas' => 'id_kelas']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNis0()
    {
        return $this->hasOne(Siswa::className(), ['nis' => 'nis']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTahunAjaran()
    {
        return $this->hasOne(TahunAjaran::className(), ['id_ta' => 'tahun_ajaran']);
    }
}
