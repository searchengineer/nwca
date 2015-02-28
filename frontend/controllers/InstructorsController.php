<?php
namespace frontend\controllers;

use frontend\models\Instructors;
use yii\web\Controller;
use yii\data\ActiveDataProvider;

class InstructorsController extends Controller
{
     public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
        'query' => Instructors::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

}
