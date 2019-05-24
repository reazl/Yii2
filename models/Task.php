<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 24.05.2019
 * Time: 19:33
 */

namespace app\models;


use yii\base\Model;

class Task extends Model
{

    public $id;
    public $author;
    public $date;
    public $executer;
    public $section;
    public $body;
    public $summary;
    public $deadline;

    private static $tasks = [
        1 => [
            "id" => "1",
            "author" => "admin",
            "date" => "24.05.2019",
            "executer" => "Тимофеев А.Н.",
            "section" => "education",
            "body" => "Закончить task-менеджер и первую часть курса по изучению фреймворка Yii2",
            "summary" => "Закончить task-менеджер",
            "deadline" => "30.06.2019",

        ]
    ];

    /**
     * Task constructor.
     * @param $id
     * @param $author
     * @param $date
     * @param $executer
     * @param $section
     * @param $body
     * @param $summary
     * @param $deadline
     */
    public function __construct($id)
    {
        parent::__construct();
        $this->id = $id;
    }

    private function getTask(){

    }
}