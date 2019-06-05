<?php

use yii\db\Migration;

/**
 * Class m190605_085237_create_table_tasksStatuses
 */
class m190605_085237_create_table_tasksStatuses extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tasksStatuses', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
        ]);
        $this->createIndex('tasks_statuses_idx', 'tasksStatuses', 'id');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tasksStatuses');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190605_085237_create_table_tasksStatuses cannot be reverted.\n";

        return false;
    }
    */
}
