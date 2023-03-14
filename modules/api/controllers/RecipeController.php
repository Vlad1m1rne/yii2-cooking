<?
namespace app\modules\api\controllers;
use app\modules\admin\models\Recipe;
use yii\rest\ActiveController;

class RecipeController extends ActiveController{

  public $modelClass = Recipe::class;
}
