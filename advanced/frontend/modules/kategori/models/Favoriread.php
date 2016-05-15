<?php

namespace frontend\modules\kategori\models;

use Yii;

/**
 * This is the model class for table "favoriread".
 *
 * @property integer $ID
 * @property integer $READID
 * @property string $USERNAME
 */
class Favoriread extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'favoriread';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['READID', 'USERNAME'], 'required'],
            [['READID'], 'integer'],
            [['USERNAME'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'READID' => 'Readid',
            'USERNAME' => 'Username',
        ];
    }
}
