<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index() {

        $title = 'hello from admin';
        $title1 = 'hello from admin 1';
        $title2 = 'hello from admin 2';
        $title3 = 'hello from admin 3';


        return view('master.layout.page1', array(
            "title_name" => $title,
            "title_name1" => $title1,
            "title_name2" => $title2,
            "title_name3" => $title3,
        ));
    }

}
