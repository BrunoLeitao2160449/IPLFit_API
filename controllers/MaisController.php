<?php

namespace app\controllers;

use app\models\ComplementoUser;
use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;
use yii\rest\Controller;

class MaisController extends ActiveController
{
    public $modelClass = 'app\models\complementouser';

}
