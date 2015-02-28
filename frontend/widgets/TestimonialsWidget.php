<?php
namespace frontend\widgets;

use yii\base\Widget;
use frontend\models\Testimonials;


class TestimonialsWidget extends Widget {

    public $limit;
    public $testimonials;

    public function init() {
        parent::init();
        $this->getTestimonials($this->limit);
    }

    public function getTestimonials($limit) {
        $this->testimonials = Testimonials::find()
                ->limit($limit)
                ->orderBy(['id' => SORT_DESC])
                ->asArray()
                ->all();
    }

    public function run() {
        return $this->render('testimonials', [
                    'testimonials' => $this->testimonials,
        ]);
    }

}
