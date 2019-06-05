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
    public $creator_id;
    public $create_date;
    public $responsible_id;
    public $status_id;
    public $description;
    public $name;
    public $deadline;



    /**
     * Task constructor.
     * @param $id
     * @param $creator_id
     * @param $create_date
     * @param $responsible_id
     * @param $status_id
     * @param $description
     * @param $name
     * @param $deadline
     */
    public function __construct($id, $creator_id, $create_date, $responsible_id, $status_id, $description, $name, $deadline)
    {
        parent::__construct();
        $this->id = $id;
        $this->creator_id = $creator_id;
        $this->create_date = $create_date;
        $this->responsible_id = $responsible_id;
        $this->status_id = $status_id;
        $this->description = $description;
        $this->name = $name;
        $this->deadline = $deadline;

    }


}