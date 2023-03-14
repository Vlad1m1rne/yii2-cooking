<?
namespace app\controllers;
use yii\rest\ActiveController;
use app\models\Recipe;

class RecipeController extends ActiveController{

  public $modelClass = Recipe::class;
}