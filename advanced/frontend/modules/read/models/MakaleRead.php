<?php

namespace frontend\modules\read\models;

use Yii;

/**
 * This is the model class for table "makale".
 *
 * @property integer $ID
 * @property string $Name
 * @property string $Text
 * @property string $DC
 */
class MakaleRead extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'makale';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Text', 'DC'], 'required'],
            [['Text'], 'string'],
            [['Name', 'DC'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Name' => 'Name',
            'Text' => 'Text',
            'DC' => 'Dc',
        ];
    }
}
