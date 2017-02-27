<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tahun_ajaran".
 *
 * @property string $id_ta
 * @property string $tahun_ajaran
 *
 * @property JadwalMapel[] $jadwalMapels
 * @property JadwalUjian[] $jadwalUjians
 * @property SiswaKelas[] $siswaKelas
 */
class TahunajaranModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tahun_ajaran';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_ta', 'tahun_ajaran'], 'required'],
            [['id_ta'], 'string', 'max' => 12],
            [['tahun_ajaran'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_ta' => 'Id Ta',
            'tahun_ajaran' => 'Tahun Ajaran',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJadwalMapels()
    {
        return $this->hasMany(JadwalMapel::className(), ['tahun_ajaran' => 'id_ta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJadwalUjians()
    {
        return $this->hasMany(JadwalUjian::className(), ['tahun_ajaran' => 'id_ta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiswaKelas()
    {
        return $this->hasMany(SiswaKelas::className(), ['tahun_ajaran' => 'id_ta']);
    }
}
