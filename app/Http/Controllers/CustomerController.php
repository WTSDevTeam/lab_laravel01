<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

use App\Models\customer;
use App\Models\product;

class CustomerController extends Controller
{

    public function home2() {

        $customer_data = customer::all();

        return view('kook.home', array(
            "data" => $customer_data
        ));
    }

    public function customer() {

        $customer_data = customer::all();
        $product_data = product::all();

        return view('kook.customer.index', array(
            "data" => $customer_data,
            "product_data" => $product_data,
        ));
    }


    public function listData() {

        $brow_item = customer::all();

        $data = new \stdClass();
        $data->data = array();
        foreach($brow_item as $item) {
            $data->data[] = array(
                $item->id,
                $item->customer_code,
                $item->customer_name,
                $item->address,
                '<a href="javascript:edit('.$item->id.');" class="btn btn-primary">แก้ไข</a>',
                '<a href="javascript:confirm_deldata('.$item->id.');" class="btn btn-danger">ลบข้อมูล</a>'
            );

        }

        echo json_encode($data);
    }

    public function edit_customer($id) {
        $customer_update = customer::find($id);
        //dd($id);
        return view('kook.customer.edit');
    }

    public function get_customer($id) {
       
        $customer_data = customer::find($id);
       
        //sleep(5);

        $response = array(
            'status' => '00',
            'msg' => 'complete',
            'data' => $customer_data,
        );
        echo json_encode($response);
    }

    public function delete_customer($id) {
       
        $customer_data = customer::find($id);
       
        $customer_data->delete();

        $response = array(
            'status' => '00',
            'msg' => 'complete',
        );
        echo json_encode($response);
    }

    public function update(Request $request ,$id){
        dd($id);

    }

    public function add_customer(Request $request) {

        $Input = $request->input();

        $edit_mode = $request->get('edit_mode');
        $edit_id = $request->get('edit_id');

        if ($edit_mode == 'insert')
        {
            $save_data = new customer();
        }
        else {
            $save_data = customer::find($edit_id);
        }

        if (isset($save_data)) {
            $save_data->customer_code = $request->get('code');
            $save_data->customer_name = $request->get('name');
            $save_data->address = $request->get('address');
            $save_data->save();
        }

        $customer_data = customer::all();

        // return view('kook.customer.index', array(
        //     "data" => $customer_data
        // ));

        return redirect(URL::to('/kook/customer'));


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
        $code = $input['code'];
        $name = $input['name'];
        $address = $input['address'];

        if ($edit_mode == 'insert') {
            $save_data = new customer();
        }
        else {
            $save_data = customer::find($edit_id);
        }

        if (isset($save_data)) {
            $save_data->customer_code = $code;
            $save_data->customer_name = $name;
            $save_data->address = $address;
            $save_data->save();
        }

       
        $response = array(
            'status' => '00',
            'msg' => 'complete',
            'customer_name' => $name,
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


    public function api_customer() {

        $customer_data = customer::all();

        $response = array(
            'status' => '00',
            'msg' => 'complete',
            'data' => $customer_data,
        );
        echo json_encode($response);
    }

    
    public function api_customer_id($id) {

        $customer_data = customer::where('customer_code', '=', $id)->get();

        if (isset($customer_data) && count($customer_data) > 0)
        {
            $response = array(
                'status' => '00',
                'msg' => 'complete',
                'data' => $customer_data,
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
