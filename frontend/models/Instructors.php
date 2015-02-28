<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "instructors".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $file
 * @property string $grade
 */
class Instructors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'instructors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'file', 'grade'], 'required'],
            [['description'], 'string'],
            [['name', 'file'], 'string', 'max' => 64],
            [['grade'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'file' => 'File',
            'grade' => 'Grade',
        ];
    }
}
