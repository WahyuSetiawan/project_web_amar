<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "struktur_organisasi".
 *
 * @property integer $id_strukturor
 * @property string $jabatan
 * @property integer $nama
 */
class StrukturorgModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'struktur_organisasi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jabatan', 'nama'], 'required'],
            [['nama'], 'integer'],
            [['jabatan'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_strukturor' => 'Id Strukturor',
            'jabatan' => 'Jabatan',
            'nama' => 'Nama',
        ];
    }
}
