<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "level_user".
 *
 * @property integer $level_user
 * @property string $Keterangan
 *
 * @property User[] $users
 */
class LeveluserModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'level_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Keterangan'], 'required'],
            [['Keterangan'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'level_user' => 'Level User',
            'Keterangan' => 'Keterangan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['level_user' => 'level_user']);
    }
}
