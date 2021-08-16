<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestViewController extends Controller
{
    //
    public function viewpage() {

        $title = 'จาก controller';
        $x = 7+8/2+25;

        $y = '';
        for($i=10;$i>=-10;$i--){ // 10............................... 0
            $y =  $y."รอบที่ = ".$i."<br>";
        }

        //อ่านค่าจาก database

        return view('testview', array(
            "title_name" => $title,
            "title_name2" => $x,
            "loop_value" => $y,
            "name" => "กุ๊ก",
            "sur_name" => "ไก่",
        ));
    }

    public function getdata(Request $request) {
        $Input = $request->input();

        return view('testview', array(
            "title_name" => 'post data -> ' . $request->get('txtname') . ' : ' . $request->get('surname'),
            "title_name2" => '',
            "loop_value" => '',
            "name" => $request->get('txtname'),
            "sur_name" => $request->get('suname'),
        ));
    }

    public function about() {
        $Input = $request->input();

        return view('testview', array(
            "title_name" => 'post data -> ' . $request->get('txtname') . ' : ' . $request->get('surname'),
            "title_name2" => '',
            "loop_value" => '',
            "name" => $request->get('txtname'),
            "sur_name" => $request->get('suname'),
        ));
    }

}
