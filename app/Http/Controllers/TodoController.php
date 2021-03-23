<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $result['data']=todo::all();
        // return view('/',['key'=>'value']);
        return view('dashboard',$result);
        // return $result;
    }
    
    public function addTodo(Request $request)
    {
        //
        $data=new todo();
        
        $data->userId="1"/* Auth::id() */;
        $data->title=$request->post('title');
        $data->description=$request->post('description');
        $data->save();
        return redirect("/");

        /* To fetch loggined user id use following code */
        // use Illuminate\Support\Facades\Auth;
        // $id = Auth::id(); 
    }
    public function deleteTodo(Request $request,$id)
    {
        //
        $data=todo::find($id);
        $data->delete();
        return redirect("/");
        // return $data;
        
    }

    public function editViewTodo(Request $request,$id)
    {
        //
        $data['data']=todo::find($id);
        return view('editViewTodo',$data);
    }
    
    public function editTodo(Request $request,$id)
    {
        //
        $data=todo::find($id);
        
        $data->userId="1"/* Auth::id() */;
        $data->title=$request->post('title');
        $data->description=$request->post('description');
        $data->save();
        return redirect("/");
    }

    
}