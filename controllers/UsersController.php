<?php

namespace app\controllers;

use app\models\User;
use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;
use yii\rest\Controller;

class UsersController extends ActiveController
{
    public $modelClass = 'app\models\user';

}
