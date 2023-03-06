<?
namespace app\modules\admin\controllers;
use yii\base\Controller;
use yii\filters\AccessControl;

class AppAdminController extends Controller{

public function behaviors()
{
  return [
  'access'=>[
    'class' => AccessControl::class,
    'rules'=>[
      [
      'allow'=>true,
      'roles'=>['@']
    ]
    ]
  ]
    ];
}

}



















?>