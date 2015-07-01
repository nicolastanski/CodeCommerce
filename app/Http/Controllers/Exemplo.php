<?php

namespace CodeCommerce\Http\Controllers;
use CodeCommerce\Category;


class Exemplo extends Controller
{
    private $categories;

    public function __construct(Category $category){

        $this->middleware('guest');
        $this->categories = $category;
    }


    public function index(){


        $categories = $this->categories->all();

        //$categories = Category::all();

        return view('exemplo',compact('categories'));


    }
}
