<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nilai".
 *
 * @property string $kode_mapel
 * @property string $nis
 * @property double $nilai_tugas
 * @property double $nilai_uts
 * @property double $nilai_uas
 * @property double $nilai_akhir
 *
 * @property Siswa $nis0
 */
class NilaiModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nilai';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode_mapel', 'nis', 'nilai_tugas', 'nilai_uts', 'nilai_uas', 'nilai_akhir'], 'required'],
            [['nilai_tugas', 'nilai_uts', 'nilai_uas', 'nilai_akhir'], 'number'],
            [['kode_mapel'], 'string', 'max' => 10],
            [['nis'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kode_mapel' => 'Kode Mapel',
            'nis' => 'Nis',
            'nilai_tugas' => 'Nilai Tugas',
            'nilai_uts' => 'Nilai Uts',
            'nilai_uas' => 'Nilai Uas',
            'nilai_akhir' => 'Nilai Akhir',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNis0()
    {
        return $this->hasOne(Siswa::className(), ['nis' => 'nis']);
    }
}
