<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posting".
 *
 * @property integer $id_posting
 * @property string $judul_posting
 * @property string $gambar
 * @property string $isi_posting
 * @property integer $id_kategori
 *
 * @property Kategori $idKategori
 */
class PostingModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul_posting', 'isi_posting', 'id_kategori'], 'required'],
            [['isi_posting'], 'string'],
            [['id_kategori'], 'integer'],
            [['judul_posting'], 'string', 'max' => 150],
            [['gambar'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_posting' => 'Id Posting',
            'judul_posting' => 'Judul Posting',
            'gambar' => 'Gambar',
            'isi_posting' => 'Isi Posting',
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
