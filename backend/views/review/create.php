<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Book */

$this->title = 'Отзыв для книги: '.$bookModel->title;
$this->params['breadcrumbs'][] = ['label' => 'Review', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="review-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="review-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($reviewModel, 'user_id')->label(false)->hiddenInput(['value' => \Yii::$app->user->id]) ?>
        <?= $form->field($reviewModel, 'book_id')->label(false)->hiddenInput(['value' => $bookModel->id]) ?>
        <?= $form->field($reviewModel, 'text')->label(false)->textarea() ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>
