<?php

namespace app\controllers\site;

use app\controllers\ContainerController;

class HomeController extends ContainerController
{
    public function index()
    {
        dd('index, HomeController');
    }
}
