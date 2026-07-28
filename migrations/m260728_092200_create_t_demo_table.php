<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%t_demo}}`.
 */
class m260728_092200_create_t_demo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%t_demo}}', [
            'id' => $this->primaryKey(),
            'demo_name' => $this->string(50)->notNull()->comment('演示名称'),
            'created_at' => $this->integer()->notNull()->comment('创建时间'),
            'updated_at' => $this->integer()->notNull()->comment('更新时间'),
        ]);
        $this->createIndex('idx_demo_name', '{{%t_demo}}', 'demo_name',true);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%t_demo}}');
    }
}
