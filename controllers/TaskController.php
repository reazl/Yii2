<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 24.05.2019
 * Time: 16:42
 */

namespace app\controllers;


use app\models\Task;
use yii\web\Controller;

class TaskController extends Controller
{
    public function actionAdd(){
        $task = new Task(1);
        
        return $this->render('test', [
            'header'=> $task->summary,
            'body'=> $task->body,
            'author'=> $task->author,
            'deadline'=> $task->deadline,
            'executer'=> $task->executer,
            'section'=> $task->section,
            'date'=> $task->date


            ]);
    }
}