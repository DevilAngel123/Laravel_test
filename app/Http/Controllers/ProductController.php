<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Roots;
use App\Http\controllers\MyController;
class ProductController extends Controller
{
    public function index()
    {
        return view('products.admin.layout.index');
    }
    public function create()
    {

    }
    public function GetData()
    {
        $data['user']= ['Dung','Anh','Hoa'];
        return view ('home',$data);
    }
    public function GetDataRequest(Request $request)
    {
        echo $request ->public_path();
    }
    public function postForm(Request $request)
    {
        echo $request -> username;
        echo '<br>';
        echo $request -> password;
    }
    public function postFile(Request $request)
    {
        if($request ->hasFile('myFile')){
            $request->file('myFile')->move(
            'img','saved.png');
        }
        else
        {
            echo" none existen";
        }
    }
}
