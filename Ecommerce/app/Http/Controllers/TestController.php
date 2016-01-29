<?php

namespace Ecommerce\Http\Controllers;

use Ecommerce\Category;
use Illuminate\Http\Request;

use Ecommerce\Http\Requests;
use Ecommerce\Http\Controllers\Controller;

class TestController extends Controller
{

    private $categories;

    public function __construct(Category $category)
    {
        $this->categories = $category;
    }

    public function index(){
        $name = 'Yurick';
        $categories = $this->categories->all();
        return view('test/index', compact('name', 'categories'));
    }
}
