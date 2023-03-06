<?

use yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<?

if($models == null){
  echo "<h4>По Вашему запросу ничего не найдено.</h4>";
}

if ($cat === 'all') {
  foreach ($models as $line) {
    echo "<tr>";
    echo "<td>" . $line['recipeId'] . "</td>";
    echo "<td>" . $line['category']['nameCategory'] . "</td>";
    echo "<td>" . $line['nameRecipe'] . "</td>";
    echo "<td>" . $line['ingredient'] . "</td>";
    echo "<td>" . $line['recipeDescription'] . "</td>";
    if ($line['link'] != null) {
      echo "<td>" . Html::a('ссылка', Url::to($line['link']), ['target' => '_blank']) . "</td>";
    } else {
      echo "<td>" . $line['link'] . "</td>";
    }
    echo "<td>" . $line['dat'] . "</td>";
    echo "<td><button class='upd btn btn-primary' value='" . $line["recipeId"] . "'>Изменить</button></td>";
    echo "</tr>";
    echo "</tr>";
  }
} else {

  foreach ($models as $line) {
    echo "<tr>";
    echo "<td>" . $line['recipeId'] . "</td>";
    echo "<td>" . $line['category']['nameCategory'] . "</td>";
    echo "<td>" . $line['nameRecipe'] . "</td>";
    echo "<td>" . $line['ingredient'] . "</td>";
    echo "<td>" . $line['recipeDescription'] . "</td>";
    if ($line['link'] != null) {
      echo "<td>" . Html::a('ссылка', Url::to($line['link']), ['target' => '_blank']) . "</td>";
    } else {
      echo "<td>" . $line['link'] . "</td>";
    }
    echo "<td>" . $line['dat'] . "</td>";
  }
}

echo LinkPager::widget([
  'pagination' => $pages,
]);


?>