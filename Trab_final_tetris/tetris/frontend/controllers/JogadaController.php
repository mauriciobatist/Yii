<?php
/**
 * Created by PhpStorm.
 * User: clawbert
 * Date: 11/07/17
 * Time: 20:03
 */

namespace frontend\controllers;


use yii\web\Controller;

class JogadaController extends Controller
{
    public function actionPlay() {
        return $this->render('play');
    }

    public function actionRanking() {
        return $this->render('ranking');
    }

    public function actionSave() {
        return $this->render('save');
    }
}