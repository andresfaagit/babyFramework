<?php 

class View {

  public static function render($view, $data = [])  //$view es el nombre de la vista
                                                    //$data[] recibe los datos requeridos por el controlador al modelo. Por ej una lista de productos.
  {
    $view = 'baby1';
    // Convertir el array asociativo en objeto
    $d = to_object($data); // $data en array assoc o $d en objectos

    if(!is_file(VIEWS.CONTROLLER.DS.$view.'View.php')) {
      die(sprintf('No existe la vista "%sView" en la carpeta "%s".', $view, CONTROLLER));
    }

    //A la vista base se le indicará el body correspondiente a cargar
    require_once BASEVIEWS;

    exit();
  }
}