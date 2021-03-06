<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

use App\Models\customer;
use App\Models\product;

class ProductController extends Controller
{

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

    public function listData() {

        $brow_item = product::all();

        $data = new \stdClass();
        $data->data = array();
        foreach($brow_item as $item) {
            $data->data[] = array(
                $item->id,
                $item->product_code,
                $item->product_name,
                $item->stock_qty,
                '<a href="javascript:edit('.$item->id.');" class="btn btn-primary">แก้ไข</a>',
                '<a href="javascript:confirm_deldata('.$item->id.');" class="btn btn-danger">ลบข้อมูล</a>'
            );

        }

        echo json_encode($data);
    }

    public function edit_product($id) {
        $product_update = Product::find($id);
        //dd($id);
        return view('kook.product.edit');
    }

    public function get_product($id) {
       
        $product_data = Product::find($id);
       
        //sleep(5);

        $response = array(
            'status' => '00',
            'msg' => 'complete',
            'data' => $product_data,
        );
        echo json_encode($response);
    }

    public function delete_product($id) {
       
        $product_data = Product::find($id);
       
        $product_data->delete();

        $response = array(
            'status' => '00',
            'msg' => 'complete',
        );
        echo json_encode($response);
    }

    public function update(Request $request ,$id){
        dd($id);

    }

    public function add_product(Request $request) {

        $Input = $request->input();

        $edit_mode = $request->get('edit_mode');
        $edit_id = $request->get('edit_id');

        if ($edit_mode == 'insert')
        {
            $save_data = new product();
        }
        else {
            $save_data = Product::find($edit_id);
        }

        if (isset($save_data)) {
            $save_data->product_code = $request->get('p_code');
            $save_data->product_name = $request->get('name');
            $save_data->stock_qty = $request->get('qty');
            $save_data->save();
        }

        $product_data = product::all();

        // return view('kook.product.index', array(
        //     "data" => $product_data
        // ));

        return redirect(URL::to('/kook/product'));


    }

    
    public function getstock(Request $request) {

        $request->get('code');
        $stock = product::where('product_code', '=', $request->get('code'))->get();
        $stock_qty = 0;

        if (isset($stock) && count($stock) > 0) {
            $stock_qty = $stock[0]->stock_qty;
        }

        $response = array(
            'status' => '00',
            'msg' => 'complete',
            'code' => $request->get('code'),
            'stock_qty' => $stock_qty,
        );

        echo json_encode($response);
    }

    public function store(Request $request) {

        $input = $this->decodeFormArray($request->input('data'));

        $edit_id = $input['edit_id'];
        $edit_mode = $input['edit_mode'];
        $code = $input['p_code'];
        $name = $input['name'];
        $stock = $input['qty'];

        if ($edit_mode == 'insert') {
            $save_data = new product();
        }
        else {
            $save_data = Product::find($edit_id);
        }

        if (isset($save_data)) {
            $save_data->product_code = $code;
            $save_data->product_name = $name;
            $save_data->stock_qty = floatval($stock);
            $save_data->save();
        }

        $response = array(
            'status' => '00',
            'msg' => 'complete',
        );
        echo json_encode($response);

    }

   public function decodeFormArray($form) {
        $data = array();
        foreach ($form as $key => $val) {
            $data[$val['name']] = $val['value'];
        }
        return $data;
    }

    public function api_product() {

        
        
        //$product_data = product::all();

        // $product_data = DB::table('product')
        //     ->where('stock_qty', '>', 1000)
        //     ->select('product_code as code','product_name as name','stock_qty as qty')
        //     ->get();

        $product_data = DB::table('order as ord')
            ->leftJoin('customer as cus', 'cus.id', '=', 'ord.customer_id')
            ->select('ord.order_id' ,'ord.order_no','ord.order_date' ,'ord.customer_id','cus.customer_code','cus.customer_name' )
            ->get();

        $response = array(
            'status' => '00',
            'msg' => 'complete',
            'data' => $product_data,
        );
        echo json_encode($response);
    }

    
    public function api_product_id($id) {

        $product_data = product::where('product_code', '=', $id)->get();

        if (isset($product_data) && count($product_data) > 0)
        {
            $response = array(
                'status' => '00',
                'msg' => 'complete',
                'data' => $product_data,
            );
        } else { 
            $response = array(
                'status' => '-1',
                'msg' => 'not found data',
                'data' => null,
            );
    
        }
        echo json_encode($response);
    }

}
