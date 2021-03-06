<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

use App\Models\product;

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

        dd($Input);
        
        // return view('testview', array(
        //     "title_name" => 'post data -> ' . $request->get('txtname') . ' : ' . $request->get('surname'),
        //     "title_name2" => '',
        //     "loop_value" => '',
        //     "name" => $request->get('txtname'),
        //     "sur_name" => $request->get('suname'),
        // ));
    }

    public function about() {
        // $Input = $request->input();

        return view('about', array(
            "title_name" => '',
            "title_name2" => '',
            "loop_value" => '',
            "name" => '',
            "sur_name" => '',
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

        $product_data = product::all();

        return view('kook.home', array(
            "data" => $product_data
        ));
    }

    public function product() {

        $product_data = product::all();

        return view('kook.product.index', array(
            "data" => $product_data
        ));
    }

    public function edit_product($id) {
        $product_update = Product::find($id);
        //dd($id);
        return view('kook.product.edit');
    }

    public function update(Request $request ,$id){
        dd($id);

    }

    public function add_product(Request $request) {

        $Input = $request->input();

        $save_data = new product();
        
        $save_data->product_code = $request->get('code');
        $save_data->product_name = $request->get('name');
        
        $save_data->save();
        
        $product_data = product::all();

        // return view('kook.product.index', array(
        //     "data" => $product_data
        // ));

        return redirect(URL::to('/kook/product'));


    }

    

}
