<?php
namespace frontend\controllers;

use frontend\models\Classes;
use yii\web\Controller;
use yii\data\ActiveDataProvider;


class ClassesController extends Controller
{
     public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
        'query' => Classes::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

}
