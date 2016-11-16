<?php

/**
* \HomeController
*/
class HomeController extends BaseController
{
  
  public function home()
  {
    $result = Article::first();
	require dirname(__FILE__).'/../views/home.php';
  }
}