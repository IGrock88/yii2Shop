<?php

use yii\db\Migration;

/**
 * Class m180930_110853_create_user
 */
class m180930_110853_create_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'avatar' => $this->string(),
            'password_hash' => $this->string()->notNull(),
            'access_token' => $this->string()->defaultValue('NULL'),
            'auth_key' => $this->string()->defaultValue('NULL'),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'role_id' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180930_110853_create_user cannot be reverted.\n";

        return false;
    }
    */
}
