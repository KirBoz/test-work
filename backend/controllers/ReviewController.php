<?php

namespace backend\controllers;

use common\models\Review;
use common\models\Book;
use yii\web\Controller;

class ReviewController extends Controller
{
    public function actionCreate($id)
    {
        $reviewModel = new Review();
        $bookModel = Book::findModel($id);

        if ($reviewModel->load(\Yii::$app->request->post()) && $reviewModel->save()) {
            return $this->redirect(['site/index']);
        }

        return $this->render('create', [
            'reviewModel' => $reviewModel,
            'bookModel' => $bookModel,
        ]);
    }
}
