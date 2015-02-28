<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;
/**
 * This is the model class for table "Testimonials".
 *
 * @property integer $id
 * @property string $testimonial
 * @property string $name
 * @property integer $rating
 */
class Testimonials extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'testimonials';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['testimonial', 'name', 'rating'], 'required'],
            [['rating'], 'integer'],
            [['testimonial'], 'string', 'max' => 512],
            [['name'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'testimonial' => 'Testimonial',
            'name' => 'Name',
            'rating' => 'Rating',
        ];
    }
}
