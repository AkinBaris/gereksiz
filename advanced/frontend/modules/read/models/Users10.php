<?php

namespace frontend\modules\read\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $ID
 * @property integer $Username
 * @property integer $Password
 */
class Users10 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Username', 'Password'], 'required'],
            [['Username', 'Password'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Username' => 'Username',
            'Password' => 'Password',
        ];
    }
}
