<?php
namespace frontend\controllers;

use frontend\models\Events;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

class EventsController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
        'query' => Events::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionView($id)
    {
        $model = Events::findOne($id);
        if ($model === null) {
            throw new NotFoundHttpException;
        }

        // renders a view named "view" and applies a layout to it
        return $this->render('view', [
            'model' => $model,
        ]);
    }

}
