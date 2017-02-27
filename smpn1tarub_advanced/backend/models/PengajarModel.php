<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengajar".
 *
 * @property string $id_pengajar
 * @property string $nip
 * @property string $kode_mapel
 *
 * @property JadwalMapel[] $jadwalMapels
 * @property Guru $nip0
 * @property Mapel $kodeMapel
 */
class PengajarModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pengajar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pengajar', 'nip', 'kode_mapel'], 'required'],
            [['id_pengajar', 'nip'], 'string', 'max' => 50],
            [['kode_mapel'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pengajar' => 'Id Pengajar',
            'nip' => 'Nip',
            'kode_mapel' => 'Kode Mapel',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJadwalMapels()
    {
        return $this->hasMany(JadwalMapel::className(), ['Pengajar' => 'id_pengajar']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNip0()
    {
        return $this->hasOne(Guru::className(), ['nip' => 'nip']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKodeMapel()
    {
        return $this->hasOne(Mapel::className(), ['kode_mapel' => 'kode_mapel']);
    }
}
