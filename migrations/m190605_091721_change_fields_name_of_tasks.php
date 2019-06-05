<?php

use yii\db\Migration;

/**
 * Class m190605_091721_change_fields_name_of_tasks
 */
class m190605_091721_change_fields_name_of_tasks extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('tasks', 'header', 'name');
        $this->renameColumn('tasks', 'author_id', 'creator_id');
        $this->renameColumn('tasks', 'executer_id', 'responsible_id');
        $this->renameColumn('tasks', 'body', 'description');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameColumn('tasks', 'name', 'header');
        $this->renameColumn('tasks', 'creator_id', 'author_id');
        $this->renameColumn('tasks', 'responsible_id', 'executer_id');
        $this->renameColumn('tasks', 'description', 'body');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190605_091721_change_fields_name_of_tasks cannot be reverted.\n";

        return false;
    }
    */
}
