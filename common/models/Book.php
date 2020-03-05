<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string|null $title
 * @property int|null $isbn
 */
class Book extends \yii\db\ActiveRecord
{

    const STATUS_IN_STOCK = 1;
    const STATUS_SOLD_OUT = 5;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isbn'], 'integer'],
            [['title'], 'string', 'max' => 255],
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
            'isbn' => 'Isbn',
        ];
    }

    public function getAuthorToBooks()
    {
        return $this->hasMany(AuthorToBook::className(), ['book_id' => 'id']);
    }

    public static function getBooks()
    {
        return self::find()->all();
    }

    public static function findModel($id)
    {
        return self::findOne((int)$id);
    }
}
