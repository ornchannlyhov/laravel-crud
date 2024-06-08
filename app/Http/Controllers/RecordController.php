<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Record;
class RecordController extends Controller
{
    // display record
    public function display_record (){
        $record = Record::all();
        return view('home', compact('record'));
    }

    // display create record form 
    public function display_create (){
        return view ('make.record');
    }

    // display update record form
    public function display_update($id){
        $record = Record::find($id);
        return view ('update',compact('record'));
    }
    // store new record 
    public function store (Request $request) {
        $request->validate([
            'name'=> 'required',
            'job'=> 'required',
            'age'=> 'required',
            'contact'=> 'required',
            'address '=> 'required'
        ]);
    Record::create($request->all());
    return redirect()->rout('home')->with ('success','record stored successfully');
    }

    // delete record 
    public function delete ($id){
        $record = Record::find($id);
        $record->delete();
        return redirect()->rout('home')->with('success','record deleted successfully');
    }

    //update record
    public function update (Request $request,$id){
        $request->validate([
            'name'=> 'required',
            'job'=> 'required',
            'age'=> 'required',
            'contact'=> 'required',
            'address '=> 'required'
        ]);
        $record = Record::find($id);
        $record->update($request->all());
        return redirect()->rout('home')->with('success','record updated successfully');
    }

}
