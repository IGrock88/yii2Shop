<?php

use yii\db\Migration;

/**
 * Class m180930_112433_create_good
 */
class m180930_112433_create_good extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('good', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'title_img' => $this->string(),
            'price' => $this->integer()->notNull(),
            'short_description' => $this->string(),
            'full_description' => $this->string(),
            'view' => $this->integer()->defaultValue(0),
            'category_id' => $this->integer()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('good');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180930_112433_create_good cannot be reverted.\n";

        return false;
    }
    */
}
