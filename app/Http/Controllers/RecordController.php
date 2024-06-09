<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Record;
class RecordController extends Controller
{
    // display record
    public function display_record (){
        $record = Record::all();
        return view('record.index', compact('record'));
    }

    // display create record form 
    public function display_create (){
        return view ('record.create');
    }

    // display update record form
    public function display_update($id){
        $record = Record::find($id);
        return view ('record.update',compact('record'));
    }
    
    //display one specific record
    public function show_record($id){
        $record=Record::find($id);
        return view('record.show', compact('record'));
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
    return redirect()->rout('record.index')->with ('success','record stored successfully');
    }

    // delete record 
    public function delete ($id){
        $record = Record::find($id);
        $record->delete();
        return redirect()->rout('record.index')->with('success','record deleted successfully');
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
        return redirect()->rout('record.index')->with('success','record updated successfully');
    }

}
