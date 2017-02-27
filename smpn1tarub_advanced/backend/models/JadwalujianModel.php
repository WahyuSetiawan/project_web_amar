<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jadwal_ujian".
 *
 * @property integer $id_jadwal_ujian
 * @property integer $No
 * @property string $Tanggal
 * @property string $Jam
 * @property string $Mapel
 * @property string $Ruang
 * @property string $Kelas
 * @property string $tahun_ajaran
 *
 * @property Kelas $kelas
 * @property Mapel $mapel
 * @property TahunAjaran $tahunAjaran
 */
class JadwalujianModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jadwal_ujian';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['No', 'Tanggal', 'Jam', 'Mapel', 'Ruang', 'Kelas', 'tahun_ajaran'], 'required'],
            [['No'], 'integer'],
            [['Tanggal'], 'safe'],
            [['Jam', 'Kelas', 'tahun_ajaran'], 'string', 'max' => 10],
            [['Mapel'], 'string', 'max' => 30],
            [['Ruang'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_jadwal_ujian' => 'Id Jadwal Ujian',
            'No' => 'No',
            'Tanggal' => 'Tanggal',
            'Jam' => 'Jam',
            'Mapel' => 'Mapel',
            'Ruang' => 'Ruang',
            'Kelas' => 'Kelas',
            'tahun_ajaran' => 'Tahun Ajaran',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKelas()
    {
        return $this->hasOne(Kelas::className(), ['id_kelas' => 'Kelas']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMapel()
    {
        return $this->hasOne(Mapel::className(), ['kode_mapel' => 'Mapel']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTahunAjaran()
    {
        return $this->hasOne(TahunAjaran::className(), ['id_ta' => 'tahun_ajaran']);
    }
}
