<?php

namespace app\controllers {
    class SiteController extends \yii\web\Controller
    {
        public function actionIndex()
        {
            return $this->render('index');
        }

        public function actionJoin()
        {
            return $this->render('join');
        }

        public function actionLogin()
        {
            return $this->render('login');
        }
    }

}