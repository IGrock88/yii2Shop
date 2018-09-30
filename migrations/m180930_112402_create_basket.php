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

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180930_112402_create_basket cannot be reverted.\n";

        return false;
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
