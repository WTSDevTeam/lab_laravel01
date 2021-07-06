<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    private $title = 'สวัสดี';
    private $title1 = 'สวัสดี 1';
    private $title2 = 'สวัสดี 2';
    private $title3 = 'สวัสดี 3';

    public function index() {

        return view('welcome2', array(
            "title_name" => $this->title,
            "title_name1" => $this->title1,
            "title_name2" => $this->title2,
            "title_name3" => $this->title3,
        ));
    }

    public function about() {
        return view('about', array(
            "title_name" => $this->title,
            "title_name1" => $this->title1,
            "title_name2" => $this->title2,
            "title_name3" => $this->title3,
        ));
    }

}
