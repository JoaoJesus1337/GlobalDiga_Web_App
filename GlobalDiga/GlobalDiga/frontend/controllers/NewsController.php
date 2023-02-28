<?php

namespace frontend\controllers;

use yii\web\Controller;
use Yii;
use yii\data\Pagination;

class NewsController extends Controller
{
    public static function getAPIKey()
    {
        return 'pub_15468853c013a082cb5ffaad7a32e0c431e00';
    }

    public function actionIndex()
    {
        try {
            $APIKEY = $this->getAPIKey();
            $response = file_get_contents('https://newsdata.io/api/1/news?apikey=' . $APIKEY . '&country=pt&language=pt&category=technology');
            $response = json_decode($response);
            $news = [];

            for ($i = 0; $i < 8; $i++) {
                $news[] = $response->results[$i];
            }
        } catch (\Exception $e) {
            $news = [];
        }
        return $this->render('index', ['news' => $news]);
    }
}
