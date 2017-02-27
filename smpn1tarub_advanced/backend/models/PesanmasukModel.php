<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pesan_masuk".
 *
 * @property integer $id
 * @property string $nama
 * @property string $email
 * @property string $subjek
 * @property string $pesan
 */
class PesanmasukModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pesan_masuk';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'email', 'subjek', 'pesan'], 'required'],
            [['pesan'], 'string'],
            [['nama', 'email', 'subjek'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'email' => 'Email',
            'subjek' => 'Subjek',
            'pesan' => 'Pesan',
        ];
    }
}
