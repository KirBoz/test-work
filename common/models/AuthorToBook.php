<?php

namespace common\models;

use PHPUnit\Framework\StaticAnalysis\HappyPath\AssertNotInstanceOf\B;
use Yii;

/**
 * This is the model class for table "author_to_book".
 *
 * @property int $id
 * @property int|null $author_id
 * @property int|null $book_id
 */
class AuthorToBook extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'author_to_book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['author_id', 'book_id'], 'integer'],
        ];
    }

    public function getAuthor()
    {
        return $this->hasOne(Author::className(), ['id' => 'author_id']);
    }

    public function getBook()
    {
        return $this->hasOne(Book::className(), ['id' => 'book_id']);
    }
}
