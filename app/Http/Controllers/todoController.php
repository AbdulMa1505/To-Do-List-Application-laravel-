<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\toDoItem;
use Mockery\Generator\StringManipulation\Pass\Pass;

class todoController extends Controller
{
    
    public function index(){
        return view('welcome',['toDoItems'=>toDoItem::where('is_complete',0)->get()]);
    }
    public function saveItem( Request $request){
        // log::info(json_encode(($request->all())));
        $newItem = new toDoItem;
        $newItem->name =$request->todoItem;
        $newItem->is_complete=0;
        $newItem->save();
        // return view('welcome',['toDoItems'=>toDoItem::all()]);
        return redirect('/');
    }
    public function markComplete($id){
        // log::info($id);
        $toDoItem=toDoItem::find($id);
        $toDoItem->is_complete=1;
        $toDoItem->save();
        // log::info($toDoItem);
        return redirect ('/');
    }
}
