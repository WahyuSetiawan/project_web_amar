<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mapel".
 *
 * @property string $kode_mapel
 * @property string $mapel
 *
 * @property JadwalUjian[] $jadwalUjians
 * @property Materi[] $materis
 * @property Nilai[] $nilais
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
    public function getJadwalUjians()
    {
        return $this->hasMany(JadwalUjian::className(), ['Mapel' => 'kode_mapel']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMateris()
    {
        return $this->hasMany(Materi::className(), ['mapel' => 'kode_mapel']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNilais()
    {
        return $this->hasMany(Nilai::className(), ['kode_mapel' => 'kode_mapel']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getpengajar()
    {
        return $this->hasMany(PengajarModel::className(), ['kode_mapel' => 'kode_mapel']);
    }
}
