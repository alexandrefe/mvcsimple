<?php

namespace app\controllers\site;

use app\controllers\ContainerController;
use app\models\site\ProductModel;

class ProdutoController extends ContainerController
{
    public function index()
    {

        $product = new ProductModel;

        $products = $product->all();

        $this->view([

            'title' => 'Curso de MVC',
            'products' => $products,

        ], 'site.produto');
    }


    public function show($request)
    {
    }

    public function create()
    {
    }


    public function store()
    {
    }


    public function edit($id)
    {
    }


    public function update($id)
    {
    }

    public function destroy($id)
    {
    }
}
