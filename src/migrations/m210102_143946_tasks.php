<?php

use yii\db\Migration;

/**
 * Class m210102_143946_tasks
 */
class m210102_143946_tasks extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        return $this->createTable('tasks', [
            'id' => Schema::TYPE_PK,
            // $this->primaryKey()
            'task' => Schema::TYPE_STRING,
            // $this->string(255) // String with 255 characters
            'description' => Schema::TYPE_TEXT,
            'start_date' => Schema::TYPE_DATE,
            // $this->integer()
            'end_date' => Schema::TYPE_DATE
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return $this->dropTable('tasks');;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210102_143946_tasks cannot be reverted.\n";

        return false;
    }
    */
}

