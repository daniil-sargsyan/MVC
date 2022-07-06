<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller
{
    public function loginAction(): void
    {
        $this->view->render('Страница входа');

    }

}