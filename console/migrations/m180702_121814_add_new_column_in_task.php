<?php

use yii\db\Migration;

/**
 * Class m180702_121814_add_new_column_in_task
 */
class m180702_121814_add_new_column_in_task extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('task', 'create_at', $this->dateTime());
        $this->addColumn('task', 'update_at', $this->dateTime());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180702_121814_add_new_column_in_task cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180702_121814_add_new_column_in_task cannot be reverted.\n";

        return false;
    }
    */
}
