<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property integer $id_menu
 * @property string $nama_menu
 * @property string $link
 */
class MenuModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_menu', 'link'], 'required'],
            [['nama_menu'], 'string', 'max' => 20],
            [['link'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_menu' => 'Id Menu',
            'nama_menu' => 'Nama Menu',
            'link' => 'Link',
        ];
    }
}
