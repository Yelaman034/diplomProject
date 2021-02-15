<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Children;

class ChildrenController extends Controller
{
    //
    function children(){
        // return 'Welcome on first commet';/

        $data = Children::all();
        // return view('children.index',['child'=>$data]);
 
        return view('children.index',['child' => $data]);
    }
    function create(Request $req){
        // return 'welcome';
        //оруулсан өгөгдлийн харуулах
        // return $req->all();

        Children::create($req->all());
        return redirect('/children')->with('success','Амжилттай нэмэгдлээ!!!');
    }
    function edit($id){
        $dataChild = Children::find($id);
        // dd($dataChild);

        return view('children.edit',['child' => $dataChild]);
    }

    function update(Request $req, $id){
        $dataChild = Children::find($id);
        $dataChild->update($req->all());
        return redirect('/children')->with('success','Амжилттай нэмэгдлээ!!!');
    }
    function delete($id){
        $dataChild = Children::find($id);
        // dd($dataChild);
        $dataChild->delete($dataChild);
        return redirect('/children')->with('success','Амжилттай устгагдлаа!!!');
    }
}
