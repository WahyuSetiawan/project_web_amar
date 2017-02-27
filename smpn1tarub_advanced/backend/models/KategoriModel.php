<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kategori".
 *
 * @property integer $id_kategori
 * @property string $kategori
 *
 * @property Agenda[] $agendas
 * @property Berita[] $beritas
 * @property GaleriFoto[] $galeriFotos
 * @property InfoSekolah[] $infoSekolahs
 * @property ProfilSekolah[] $profilSekolahs
 */
class KategoriModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kategori';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kategori', 'kategori'], 'required'],
            [['id_kategori'], 'integer'],
            [['kategori'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kategori' => 'Id Kategori',
            'kategori' => 'Kategori',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgendas()
    {
        return $this->hasMany(Agenda::className(), ['id_kategori' => 'id_kategori']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBeritas()
    {
        return $this->hasMany(Berita::className(), ['id_kategori' => 'id_kategori']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGaleriFotos()
    {
        return $this->hasMany(GaleriFoto::className(), ['id_kategori' => 'id_kategori']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInfoSekolahs()
    {
        return $this->hasMany(InfoSekolah::className(), ['id_kategori' => 'id_kategori']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfilSekolahs()
    {
        return $this->hasMany(ProfilSekolah::className(), ['id_kategori' => 'id_kategori']);
    }
}
