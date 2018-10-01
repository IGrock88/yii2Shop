<?php

use yii\db\Migration;

/**
 * Class m181001_024945_create_good_img
 */
class m181001_024945_create_good_img extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('good_img', [
            'id' => $this->primaryKey(),
            'good_id' => $this->integer()->notNull(),
            'img_path' => $this->string()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer()->notNull(),
            'updated_by' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('good_img');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181001_024945_create_good_img cannot be reverted.\n";

        return false;
    }
    */
}
