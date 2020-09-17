<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $title
 * @property string $short_description
 * @property string|null $description
 * @property int|null $is_active
 * @property int|null $create_at
 * @property int|null $create_by
 * @property int|null $update_at
 * @property int|null $update_by
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'short_description'], 'required'],
            [['description'], 'string'],
            [['is_active', 'create_at', 'create_by', 'update_at', 'update_by'], 'integer'],
            [['title', 'short_description'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'short_description' => 'Short Description',
            'description' => 'Description',
            'is_active' => 'Is Active',
            'create_at' => 'Create At',
            'create_by' => 'Create By',
            'update_at' => 'Update At',
            'update_by' => 'Update By',
        ];
    }
}
