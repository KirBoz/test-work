<?php

namespace api\controllers;

use yii\rest\Controller;
use api\models\Random;
use yii\web\Response;
use Firebase\JWT\JWT;
use yii\web\HttpException;

class RandomController extends Controller
{
    const JWT_SECRET_KEY = 'L2}X#jqYu6Nkh(C&rYr6|Vbb%4p9';
    const JWT_ALGO = 'HS256';

    public function behaviors()
    {
        $behaviors = parent::behaviors();

        $behaviors['behaviorsBalance'] = [
            'class' => \yii\filters\ContentNegotiator::className(),
            'formats' => [
                'application/json' => Response::FORMAT_JSON,
            ],
        ];

        return $behaviors;
    }

    public function actionRetrieve($tkn)
    {
        $numberId = (int)\Yii::$app->request->get('id', 0);

        if($numberId){
            try {
                $dataTkn = JWT::decode($tkn, self::JWT_SECRET_KEY, [self::JWT_ALGO]);
            }
            catch (\Exception $e) {
                throw new HttpException(403, 'Access denied');
            }

            if(!empty($dataTkn)){
                $randomModel = Random::findModel($numberId);
                if(!empty($randomModel)){
                    return $randomModel->number;
                }
                throw new HttpException(204,'No Content');
            }
        }
        throw new HttpException(400 ,'Bad Request');
    }

    public function actionGenerate($tkn)
    {
        try {
            $dataTkn = JWT::decode($tkn, self::JWT_SECRET_KEY, [self::JWT_ALGO]);
        }
        catch (\Exception $e) {
            throw new HttpException(403 ,'Access denied');
        }

        if(!empty($dataTkn)){
            $rand = rand(0, 10000);
            return Random::saveNumber($rand); // return last insert ID
        }

        throw new HttpException(400 ,'Bad Request');
    }

    public function actionError()
    {
        return 'Error';
    }
}
