<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\listitem;

class TodoListController extends Controller
{
    public function index(){
        return view('welcome', ['listitems' => listitem::where('is_complete', 0)->get()]);
    }

    public function MarkComplete($id){
        \Log::info($id);
        $listitem = listitem::find($id);
        \Log::info($listitem);
        return view('welcome', ['listitem' => listitem::all()]);
    }


    public function saveitem(Request $request) {
        $newListitem = new listitem;
        $newListitem->listitems;
        $newListitem->is_complete = 0;
        $newListitem->save();
        return redirect('/');
    }
}
