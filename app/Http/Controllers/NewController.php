<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employ;

class NewController extends Controller
{
    public function index(){
       return view('index');
    }
    public function add(){
        return view('add');
    }
    public function form(Request $product){
        // $file =  $product->file('img')->move(public_path('uploads'));
        // echo $file;
       
        // echo $fileName;
        
        $product->validate([
            'bname'=>'required|min:3|max:255',
            'pname'=>'required|min:3|max:50',
            'pprice'=>'required|numeric|min:2',
            'pdess'=>'required|min:150|max:500',
            'img'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]); 
        
         
        $data = new Employ;
        $data->img = time().'.'.$product->img->extension();
        $product->img->move(public_path('uploads'), time().'.'.$product->img->extension());
        $data->bname = $product->bname;
        $data->pname = $product->pname;
        $data->pprice = $product->pprice;
        $data->pdess = $product->pdess;
        $data->save();
        return redirect()->route('add');
    }
    public function view(){
        $view = Employ::all();
        return view('view' , compact('view'));
    }
    public function list(){
        $list = Employ::all();
        return view('list',compact('list'));
    }
    public function details($bname){
        $data = Employ::find($bname);
        return view('details',compact('data'));
    }
    public function delete($id){
        $deleted_data = Employ::find($id);
        $deleted_data ->delete();
         return redirect()->route('list');       
    }
    public function update($uuid){
        $update_id = Employ::find($uuid);
        return view('update-data',compact('update_id'));
    }

    public function udata(Request $upproduct,$id){
        $upproduct->validate([
            'bname'=>'required|min:3|max:255',
            'pname'=>'required|min:3|max:50',
            'pprice'=>'required|numeric|min:2',
            'pdess'=>'required|min:150|max:500',
            // 'img'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]);
        $update_id = Employ::find($id);
        $update_id->pname = $upproduct->pname;
        $update_id->bname = $upproduct->bname;
        $update_id->pprice = $upproduct->pprice;
        $update_id->img = $upproduct->img;
        
        $update_id->pdess = $upproduct->pdess;
        // dd(all('update_id'));
   
        // $upproduct->img-> move(public_path('uploads/dd'), time().'updated.'.$upproduct->img->extension());
        // echo $upproduct->img;
        $update_id->save();
        return redirect()->route('list');
    }
}
