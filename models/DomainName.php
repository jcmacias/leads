<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "domainName".
 *
 * @property integer $Id
 * @property string $Name
 * @property boolean $hasSsl
 * @property string $templateHtml
 */
class DomainName extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'domainName';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'templateHtml'], 'required'],
            [['hasSsl'], 'boolean'],
            [['templateHtml'], 'string'],
            [['Name'], 'string', 'max' => 128],
            [['Name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Name' => 'Name',
            'hasSsl' => 'Has Ssl',
            'templateHtml' => 'Template Html',
        ];
    }
}
