<?php

namespace api\models;

use Yii;

/**
 * This is the model class for table "random".
 *
 * @property int $id
 * @property int|null $number
 */
class Random extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'random';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number' => 'Number',
        ];
    }

    public static function saveNumber($number)
    {
        if(!empty($number)){
            $random = new Random();
            $random->number = (int)$number;
            if($random->save()){
                return $random->id;
            }
        }
        return false;
    }

    public static function findModel($id)
    {
        return self::findOne((int)$id);
    }
}
