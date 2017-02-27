<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mapel".
 *
 * @property string $kode_mapel
 * @property string $mapel
 *
 * @property JadwalMapel[] $jadwalMapels
 * @property JadwalUjian[] $jadwalUjians
 * @property Pengajar[] $pengajars
 */
class MapelModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mapel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_mapel', 'mapel'], 'required'],
            [['kode_mapel'], 'string', 'max' => 20],
            [['mapel'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode_mapel' => 'Kode Mapel',
            'mapel' => 'Mapel',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJadwalMapels()
    {
        return $this->hasMany(JadwalMapel::className(), ['Mapel' => 'kode_mapel']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJadwalUjians()
    {
        return $this->hasMany(JadwalUjian::className(), ['Mapel' => 'kode_mapel']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPengajars()
    {
        return $this->hasMany(Pengajar::className(), ['kode_mapel' => 'kode_mapel']);
    }
}
