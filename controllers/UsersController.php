<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\users;
class UsersController extends Controller{
  public function actionIndex(){
    //echo "testing";
    $users = users::find()->all();
    //print_r($users);
    return $this->render("index",["users"=>$users]);
  }
}
