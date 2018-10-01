<?php

use yii\db\Migration;

/**
 * Class m180930_112402_create_basket
 */
class m180930_112402_create_basket extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('basket', [
            'id' => $this->primaryKey(),
            'quantity' => $this->integer()->notNull(),
            'good_id' => $this->integer()->notNull(),
            'user_id' => $this->integer(),
            'order_id' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('basket');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180930_112402_create_basket cannot be reverted.\n";

        return false;
    }
    */
}
