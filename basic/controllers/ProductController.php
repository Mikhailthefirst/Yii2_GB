<?php
namespace app\controllers;
use yii\web\Controller;
/**
 *
 */
class ProductController extends Controller
{
  public $layout = null;

  public function actionIndex()
  {
    return $this->render('index', [
      'title' => 'Супертитул',
      'content' => 'Оочень полезная информация',
    ]);
  }

  public function actionTest()
  {
    return $this->render('index', [
      'title' => '<h1>Хммм</h1>',
      'content' => 'что-то новенькое<br>',
    ]);
  }



  // function __construct(argument)
  // {
  //   // code...
  // }
}
?>
