<?
namespace app\modules\api\controllers;
use app\modules\api\models\Recipe;
use yii\rest\ActiveController;

class RecipeController extends ActiveController{

  public $modelClass = Recipe::class;
}
