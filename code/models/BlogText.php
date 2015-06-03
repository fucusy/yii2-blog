<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog_text".
 *
 * @property integer $text_id
 * @property string $title
 * @property string $content
 * @property string $create_date
 */
class BlogText extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog_text';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['create_date'], 'safe'],
            [['title'], 'string', 'max' => 50],
            [['content'], 'string', 'max' => 1000]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'text_id' => 'Text ID',
            'title' => 'Title',
            'content' => 'Content',
            'create_date' => 'Create Date',
        ];
    }
}
