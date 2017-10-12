<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "resource".
 *
 * @property integer $Id
 * @property string $Type
 * @property string $Url
 * @property string $Name
 * @property string $Location
 */
class Resource extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resource';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Type', 'Name'], 'required'],
            [['Type', 'Location'], 'string'],
            [['Url'], 'string', 'max' => 256],
            [['Name'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Type' => 'Type',
            'Url' => 'Url',
            'Name' => 'Name',
            'Location' => 'Location',
        ];
    }
}
