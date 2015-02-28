<?php
namespace frontend\controllers;

use frontend\models\Testimonials;
use yii\web\Controller;
use yii\data\ActiveDataProvider;


class TestimonialsController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
        'query' => Testimonials::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

}
