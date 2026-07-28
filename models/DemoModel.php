<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "t_demo".
 *
 * @property int $id
 * @property string $demo_name 演示名称
 * @property int $created_at 创建时间
 * @property int $updated_at 更新时间
 */
class DemoModel extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_demo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['demo_name', 'created_at', 'updated_at'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['demo_name'], 'string', 'max' => 50],
            [['demo_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'demo_name' => '演示名称',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }

}
