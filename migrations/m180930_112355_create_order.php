<?php

use yii\db\Migration;

/**
 * Class m180930_112355_create_order
 */
class m180930_112355_create_order extends Migration
{
    /**id, total, user_id
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('order', [
            'id' => $this->primaryKey(),
            'total' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('order');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180930_112355_create_order cannot be reverted.\n";

        return false;
    }
    */
}
