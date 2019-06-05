<?php

use yii\db\Migration;

/**
 * Class m190605_140954_rename_tasksstatuses_table
 */
class m190605_140954_rename_tasksstatuses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameTable('tasksstatuses', 'task_statuses');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameTable('task_statuses', 'tasksstatuses');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190605_140954_rename_tasksstatuses_table cannot be reverted.\n";

        return false;
    }
    */
}
