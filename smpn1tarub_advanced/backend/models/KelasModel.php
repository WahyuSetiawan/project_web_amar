<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kelas".
 *
 * @property string $id_kelas
 * @property string $kelas
 *
 * @property JadwalMapel[] $jadwalMapels
 * @property JadwalUjian[] $jadwalUjians
 * @property SiswaKelas[] $siswaKelas
 */
class KelasModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kelas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kelas', 'kelas'], 'required'],
            [['id_kelas'], 'string', 'max' => 12],
            [['kelas'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kelas' => 'Id Kelas',
            'kelas' => 'Kelas',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJadwalMapels()
    {
        return $this->hasMany(JadwalMapel::className(), ['Kelas' => 'id_kelas']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJadwalUjians()
    {
        return $this->hasMany(JadwalUjian::className(), ['Kelas' => 'id_kelas']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiswaKelas()
    {
        return $this->hasMany(SiswaKelas::className(), ['id_kelas' => 'id_kelas']);
    }
}
