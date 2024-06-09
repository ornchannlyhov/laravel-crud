<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class RecordController extends Controller
{
    // Display all records
    public function display_record()
    {
        $record = Record::all();
        return view('record.index', compact('record'));
    }

    // Display create record form
    public function display_create()
    {
        return view('record.create');
    }

    // Display update record form
    public function display_update($id)
    {
        $record = Record::findOrFail($id);
        return view('record.update', compact('record'));
    }

    // Display one specific record
    public function show_record($id)
    {
        $record = Record::findOrFail($id);
        return view('record.update', compact('record'));
    }

    // Store new record
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'job' => 'required',
            'age' => 'required|integer',
            'contact' => 'required|integer',
            'address' => 'required'
        ]);

        Record::create($request->all());

        return redirect()->route('record.index')->with('success', 'Record stored successfully');
    }

    // Delete record
    public function delete($id)
    {
        $record = Record::findOrFail($id);
        $record->delete();

        return redirect()->route('record.index')->with('success', 'Record deleted successfully');
    }

    // Update record
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'job' => 'required',
            'age' => 'required|integer',
            'contact' => 'required|integer',
            'address' => 'required'
        ]);

        $record = Record::findOrFail($id);
        $record->update($request->all());

        return redirect()->route('record.index')->with('success', 'Record updated successfully');
    }
}
