<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "galeri_foto".
 *
 * @property integer $id_galeri
 * @property string $judul_foto
 * @property string $foto
 * @property string $deskripsi
 * @property integer $id_kategori
 *
 * @property Kategori $idKategori
 */
class GalerifotoModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'galeri_foto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul_foto', 'foto', 'deskripsi', 'id_kategori'], 'required'],
            [['id_kategori'], 'integer'],
            [['judul_foto', 'foto'], 'string', 'max' => 50],
            [['deskripsi'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_galeri' => 'Id Galeri',
            'judul_foto' => 'Judul Foto',
            'foto' => 'Foto',
            'deskripsi' => 'Deskripsi',
            'id_kategori' => 'Id Kategori',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdKategori()
    {
        return $this->hasOne(Kategori::className(), ['id_kategori' => 'id_kategori']);
    }
}
