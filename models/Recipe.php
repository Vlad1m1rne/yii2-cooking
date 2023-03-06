<?
namespace app\models;
use yii\db\ActiveRecord;

class Recipe extends ActiveRecord{
  public static function tableName(){
    return 'recipe';
  }
  public function getCategory(){
    return $this->hasOne(Category::class,['categoryId'=>'categoryId']);
  }
  // public function rules(){
  //   return [
  //     [['categoryId','nameRecipe','recipeDescription'],'required'],
  //     ['link','trim'] 
  //   ];
  // }

}