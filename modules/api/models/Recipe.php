<?php

namespace app\modules\api\models;

use Yii;

/**
 * This is the model class for table "recipe".
 *
 * @property int $recipeId
 * @property int|null $categoryId
 * @property string|null $nameRecipe
 * @property string|null $ingredient
 * @property string|null $recipeDescription
 * @property string|null $link
 * @property string|null $dat
 *
 * @property Category $category
 */
class Recipe extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'recipe';
    }

    public function fields(){
return [
    'recipeId',
    'categoryId',
    'nameRecipe', 
    'recipeDescription',
    'link',
];

    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['categoryId'], 'integer'],
            [['nameRecipe', 'ingredient', 'recipeDescription', 'link'], 'string'],
            [['dat','recipeId'], 'safe'],
            [['categoryId'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['categoryId' => 'categoryId']],
        ];
    }

    // public function rules()
    // {
    //   return [
    //     [['recipeId', 'categoryId', 'nameRecipe', 'recipeDescription', 'ingredient', 'link','dat'], 'safe'],
    //   ];
    // }


    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'recipeId' => 'Recipe ID',
            'categoryId' => 'Category ID',
            'nameRecipe' => 'Name Recipe',
            'ingredient' => 'Ingredient',
            'recipeDescription' => 'Recipe Description',
            'link' => 'Link',
            'dat' => 'Dat',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['categoryId' => 'categoryId']);
    }
}
