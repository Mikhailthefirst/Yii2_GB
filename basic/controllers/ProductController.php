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

  // function __construct(argument)
  // {
  //   // code...
  // }
}
?>
