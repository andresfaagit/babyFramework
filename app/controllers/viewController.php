<?php 

class viewController extends Controller {
  function __construct()
  {
  }
  
  function index() {
    $data =
    [
      'title' => 'Página de prueba',
      'bg'    => 'dark'
    ];
    
    View::render('test', $data);
  }
}