<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller
{
    public function indexAction(): void
    {
        $this->view->render('Главная страница', /*$vars*/);


        //We can change the path to the layout
        //$this->view->layout = 'Layout path';

        // We can change the view path
        //$this->view->path = 'View path'

        //For redirect
        //$this->view->redirect('url');

        // We can send data to $vars

        //        $vars = [
        //            'name' => 'Mike',
        //            'age' => 23,
        //            ];


        //    An example of working with models
        //    $result = $this->model->getNews();

//        array(2) {
//          [0]=>
//              array(1) {
//                  ["title"]=> string(10) "title1"
//              }
//          [1]=>
//              array(1) {
//                  ["title"]=> string(8) "title2"
//              }
//        }

    }


}