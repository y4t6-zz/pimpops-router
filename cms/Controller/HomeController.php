<?php

namespace Cms\Controller;

class HomeController extends CmsController
{
    public function index()
    {
        echo 'Index Page';
    }

    public function news()
    {
        echo 'news list';
    }

    public function newsOne($id)
    {
        echo $id;
    }
}