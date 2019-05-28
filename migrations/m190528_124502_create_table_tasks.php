<?php

use yii\db\Migration;

/**
 * Class m190528_124502_create_table_tasks
 */
class m190528_124502_create_table_tasks extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tasks',[
            'id' => $this->primaryKey(),
            'header' => $this->string(100)->notNull(),
            'author_id' => $this->integer(11),
            'deadline' => $this->date(),
            'body' => $this->string(255),
            'executer_id' => $this->integer(11),
            'section_id' => $this->integer(11),
            'create_date' => $this->date(),
        ]);
        $this->createIndex('tasks_author_idx', 'tasks', 'author_id');
        $this->createIndex('tasks_executer_idx', 'tasks', 'executer_id');
        $this->createIndex('tasks_section_idx', 'tasks', 'section_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tasks');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190528_124502_create_table_tasks cannot be reverted.\n";

        return false;
    }
    */
}
