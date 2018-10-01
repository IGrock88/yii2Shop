<?php

use yii\db\Migration;

/**
 * Class m181001_030518_add_foreign_keys
 */
class m181001_030518_add_foreign_keys extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->addForeignKey('fx_user_role', 'user', 'role_id', 'role', 'id');

        $this->addForeignKey('fx_order_user', 'order', 'user_id', 'user', 'id');

        $this->addForeignKey('fx_basket_user', 'basket', 'user_id', 'user', 'id');
        $this->addForeignKey('fx_basket_order', 'basket', 'order_id', 'order', 'id');
        $this->addForeignKey('fx_basket_good', 'basket', 'good_id', 'good', 'id');

        $this->addForeignKey('fx_good_category', 'good', 'category_id', 'category', 'id');

        $this->addForeignKey('fx_good_img_good', 'good_img', 'good_id', 'good', 'id');


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fx_user_role', 'user');

        $this->dropForeignKey('fx_order_user', 'order');

        $this->dropForeignKey('fx_basket_user', 'basket');
        $this->dropForeignKey('fx_basket_order', 'basket');
        $this->dropForeignKey('fx_basket_good', 'basket');

        $this->dropForeignKey('fx_good_category', 'good');

        $this->dropForeignKey('fx_good_img_good', 'good_img');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181001_030518_add_foreign_keys cannot be reverted.\n";

        return false;
    }
    */
}
