<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $published
 * @property string $updated
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['description'], 'string'],
            [['published'], 'safe'],
            [['updated'], 'safe'],
            [['title'], 'string', 'max' => 128]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'published' => 'Published',
            'updated' => 'Updated',
        ];
    }
}
