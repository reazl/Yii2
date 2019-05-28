<?php

use yii\db\Migration;

/**
 * Class m190528_130623_create_table_users
 */
class m190528_130623_create_table_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'username' => $this->string(255)->notNull(),
            'position_id' => $this->integer(11)->notNull(),
            'login' => $this->string(20)->notNull(),
            'password' => $this->string(20)->notNull(),
            'accessToken' => $this->string(50)->notNull(),
            'authKey' => $this->string(50)->notNull(),
    ]);
        $this->createIndex('users_position_idx', 'users', 'position_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('users');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190528_130623_create_table_users cannot be reverted.\n";

        return false;
    }
    */
}
