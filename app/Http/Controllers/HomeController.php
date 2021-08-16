<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    private $title = 'สวัสดี';
    private $title1 = 'สวัสดี 1';
    private $title2 = 'สวัสดี 2';
    private $title3 = 'สวัสดี 3';

    public function index() {

    }
    public function about() {
        return view('about', array(
            "title_name" => $this->title,
            "title_name1" => $this->title1,
            "title_name2" => $this->title2,
            "title_name3" => $this->title3,
        ));
    }

    public function contact() {

        $product_data = product::where('branch_id', '=', '002')
        ->get();

        return view('contact', array(
            "title_name" => '',
            "title_name2" => '',
            "loop_value" => '',
            "name" => '',
            "sur_name" => '',
            "data" => $product_data,
            
        ));
    }     
    public function home2() {
        return view('kook.home');
    }

}
