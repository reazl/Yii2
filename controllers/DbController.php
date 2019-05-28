<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 27.05.2019
 * Time: 16:00
 */

namespace app\controllers;


use yii\web\Controller;

class DbController extends Controller
{
    /*public function getDb(){
        return $db = \Yii::$app->db;
    }*/

    public static function getTasks(){
        $db = \Yii::$app->getDb();
        $result = $db->createCommand("
        SELECT * FROM tasks")
            ->queryAll();

        return $result;


    }
    /*public function getUsers(){
        $db = \Yii::$app->getDb();
        $users = $db->createCommand("
        SELECT * FROM `users`
        ")->queryAll();
        return $users;
        exit;
    }*/
}