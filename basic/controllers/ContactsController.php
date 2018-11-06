<?php

namespace app\controllers;

use yii\web\Controller;


/**
 *
 */
class ContactsController extends Controller
{

  public function actionIndex()
  {
    return $this->render('contacts', [
      'phone' => '2741001',
      'address' => 'Kudikina gora, 21',
    ]);
  }


  // function __construct(argument)
  // {
  //   // code...
  // }
}





 ?>
