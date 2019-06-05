<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 05.06.2019
 * Time: 14:31
 */

namespace app\widgets;


use yii\base\Widget;

class TaskCard extends Widget
{
    public $model;
    public $linked = true;

    public function run()
    {
        return $this->render('TasksCards', [
            'model' => $this->model,
            'linked' => $this->linked,
        ]);
    }
}