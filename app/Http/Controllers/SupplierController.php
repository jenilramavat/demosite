<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Response;
use Request;
//use DataTableSql;
use Datatables;
use DB;
use Illuminate\Support\Facades\Validator;


class SupplierController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('supplier.index');
    }

    public function ajax_datagrid(){

        $SupplierData= DB::table('tblsupplier')

            ->select('SupplierCode','ContactPerson','Address','Phone','Email','RegNo','VatNo','ID')
        ;

        return datatables()->of($SupplierData)
            ->orderColumn('ID', '-ID $1')

            ->make(false);
        //return response()->json($Result);
        
    }

    public function addSupplier(){
        $data = Request::all();
        $rules = array(
                'SupplierCode' => ['required','max:50','regex:/^[a-zA-Z0-9]+$/u'],
                'ContactPerson' => ['required','regex:/^[\pL\s]+$/u'],
                'Address' => ['required','regex:/^[a-zA-Z0-9 -]+$/u'],
                'Phone' => ['required','numeric','regex:/^[0-9]+$/u'],
                'Email' => ['required','email','max:100','unique:tblsupplier'],
                'RegNo' => ['required','regex:/^[a-zA-Z0-9]+$/u'],
                'VatNo' => ['required','regex:/^[a-zA-Z0-9]+$/u'],

                );
        
        //validation process
       $validator= Validator::make( $data , $rules);

        if ($validator->fails()) {
            return json_validator_response($validator);
        }
        

        $SupplierData = array(
            "SupplierCode" => $data["SupplierCode"],
            "ContactPerson" => $data["ContactPerson"],
            "Address" => $data["Address"],
            "Phone" => $data["Phone"],
            "Email" => $data["Email"],
            "RegNo" => $data["RegNo"],
            "VatNo" => $data["VatNo"],
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        );    

        if ($supplier = Supplier::create($SupplierData)) {
            return response()->json(array("status" => "success", "message" => "Supplier added Successfully"));
        } else {
            return response()->json(array("status" => "failed", "message" => "Problem Creating Supplier."));
        }


    }


    public function update($id){
        if($id > 0){

            $data = Request::all();
            $Supplier = Supplier::findOrFail($id);

            $rules = array(
                'SupplierCode' => ['required','max:50','regex:/^[a-zA-Z0-9]+$/u'],
                'ContactPerson' => ['required','regex:/^[\pL\s]+$/u'],
                'Address' => ['required','regex:/^[a-zA-Z0-9 -]+$/u'],
                'Phone' => ['required','numeric','regex:/^[0-9]+$/u'],
                'Email' => ['required','email','max:100'],
                'RegNo' => ['required','regex:/^[a-zA-Z0-9]+$/u'],
                'VatNo' => ['required','regex:/^[a-zA-Z0-9]+$/u'],
                    );
        
            //validation process
           $validator= Validator::make( $data , $rules);

            if ($validator->fails()) {
                return json_validator_response($validator);
            }

            $SupplierData = array(
                "SupplierCode" => $data["SupplierCode"],
                "ContactPerson" => $data["ContactPerson"],
                "Address" => $data["Address"],
                "Phone" => $data["Phone"],
                "Email" => $data["Email"],
                "RegNo" => $data["RegNo"],
                "VatNo" => $data["VatNo"],
                "updated_at" => date('Y-m-d H:i:s'),
            );    

            if ($Supplier->update($SupplierData)) {
                return response()->json(array("status" => "success", "message" => "Supplier Successfully Updated"));
            } else {
                return response()->json(array("status" => "failed", "message" => "Problem Updating Supplier."));
            }

        }else{
            return response()->json(array("status" => "failed", "message" => "Problem Updating Supplier."));
        }
        

    }

    public function delete($id){

        if(intval($id) > 0){
            $result = Supplier::find($id)->delete();
            if ($result) {
                return response()->json(array("status" => "success", "message" => "Supplier deleted Successfully."));
            }else{
                return response()->json(array("status" => "failed", "message" => "Problem Deleting Supplier."));
            }

        }else{
            return response()->json(array("status" => "failed", "message" => "Problem Deleting Supplier."));
        }


    }


}
