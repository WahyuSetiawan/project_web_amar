<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jadwal_mapel".
 *
 * @property integer $id_jadwal_mapel
 * @property string $No
 * @property string $Hari
 * @property string $Jam
 * @property string $Ruang
 * @property string $Kelas
 * @property string $Mapel
 * @property string $Pengajar
 * @property string $tahun_ajaran
 *
 * @property Kelas $kelas
 * @property Mapel $mapel
 * @property Pengajar $pengajar
 * @property TahunAjaran $tahunAjaran
 */
class JadwalmapelModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jadwal_mapel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['No', 'Hari', 'Jam', 'Ruang', 'Kelas', 'Mapel', 'Pengajar', 'tahun_ajaran'], 'required'],
            [['No', 'Hari', 'Jam', 'Ruang'], 'string', 'max' => 20],
            [['Kelas'], 'string', 'max' => 12],
            [['Mapel'], 'string', 'max' => 30],
            [['Pengajar'], 'string', 'max' => 50],
            [['tahun_ajaran'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_jadwal_mapel' => 'Id Jadwal Mapel',
            'No' => 'No',
            'Hari' => 'Hari',
            'Jam' => 'Jam',
            'Ruang' => 'Ruang',
            'Kelas' => 'Kelas',
            'Mapel' => 'Mapel',
            'Pengajar' => 'Pengajar',
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
    public function getPengajar()
    {
        return $this->hasOne(Pengajar::className(), ['id_pengajar' => 'Pengajar']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTahunAjaran()
    {
        return $this->hasOne(TahunAjaran::className(), ['id_ta' => 'tahun_ajaran']);
    }
}
