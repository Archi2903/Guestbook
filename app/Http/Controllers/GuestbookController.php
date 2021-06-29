<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;

class GuestbookController extends Controller
{
    public function createRecord(Request $request)
    {
        $record = new Record();
        $record->name = $request->input('name');
        $record->email=$request->input('email');
        $record->message=$request->input('message');

        $record->save();

        return redirect()->route('main')->with('success', 'Your message add!');
    }

    public function getRecords()
    {
        $records= new Record;
        return view('index',['records'=>$records->all()]);
    }
}
