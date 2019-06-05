<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 24.05.2019
 * Time: 16:42
 */

namespace app\controllers;


use app\models\ActiveRecords\Tasks;


use yii\data\ActiveDataProvider;
use yii\web\Controller;

class TaskController extends Controller
{
    public function actionIndex(){

        $dataProvider = new ActiveDataProvider([
            'pagination' => [
                'pageSize' =>3
            ],
            'query' => Tasks::find()
        ]);

        return $this->renderAjax('index', ['dataProvider' => $dataProvider]);

    }
    public function actionCard($id){
        $model = Tasks::findOne($id);

        return $this->render('Card', [
            'model' => $model,
            'status' => $model->status->toArray()['name']
        ]);
    }
}