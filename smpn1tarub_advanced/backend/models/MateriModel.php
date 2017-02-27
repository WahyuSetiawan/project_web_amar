<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "materi".
 *
 * @property integer $id_materi
 * @property string $nama_file
 * @property string $tgl_unggah
 * @property string $deskripsi
 * @property string $tipe_file
 * @property string $file
 * @property string $nip
 *
 * @property Guru $nip0
 */
class MateriModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'materi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_file', 'tgl_unggah', 'deskripsi', 'tipe_file', 'file', 'nip'], 'required'],
            [['tgl_unggah'], 'safe'],
            [['deskripsi'], 'string'],
            [['nama_file', 'file'], 'string', 'max' => 100],
            [['tipe_file'], 'string', 'max' => 10],
            [['nip'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_materi' => 'Id Materi',
            'nama_file' => 'Nama File',
            'tgl_unggah' => 'Tgl Unggah',
            'deskripsi' => 'Deskripsi',
            'tipe_file' => 'Tipe File',
            'file' => 'File',
            'nip' => 'Nip',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNip0()
    {
        return $this->hasOne(Guru::className(), ['nip' => 'nip']);
    }
}
