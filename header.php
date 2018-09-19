<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 19.09.2018
 * Time: 12:38
 */
require_once 'C:\OSPanel\domains\PHP\app\include\database.php';
require_once 'C:\OSPanel\domains\PHP\app\include\functions.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="'X-UA-Compatable" content="IE=edge">
    <meta name="vieport" content="width=divice-width, initial-scale=1">
    <title> Мой первый блог</title>

    <!-- Bootstrap -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

</head>
<body
<div class="navbar navbar-inverce navbar-static-top">
      </div> class ="container">
            <div class="navbar-header">
                <button type ="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                    <span class="sr-only"> открыть навигацию </span>
                    <span class="icon-bar"><</span>
                    <span class="icon-bar"><</span>
                    <span class="icon-bar"><</span>

                </button>
    <a class="navbar-brand" href="/" Мой первый блог </a>
</div>
<div class="collapse navbar-collapse" id="responsive-menu">
    <ul class="nav navbar-nav">
        <?php
$categories = get_categories($link);
?>
        <?php if (count($categories)=== 0) : ?>
        <li><a href="#"><i class="glyphicon glyphicon-plus-sighn" ></i>i добавить категорию</a></li>
<?php else: ?>
        <?php foreach ($categories as $category):?>
        <li><a href="/category.php?id=<?=$category["id"]?>"><?=$category["title"]?></a></li>
        <?php endforeach; ?>
        <?php endif; ?>
       </ul>
      </div>
   <div class="container">
       <div class="allert allert-danger">
           <pre><?=$categories[1]['category_title']?></pre>
       </div>
   </div>

</html>

<pre>

<?php print_r($categories) ;?>

</pre>


?>