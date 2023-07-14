<?php

namespace App\Http\Controllers;

use App\Models\Child;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    public function index()
    {
        $children = Child::all();
        return view('children.index', compact('children'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'children.*.first_name' => 'required|regex:/^[a-zA-Z0-9\s]+$/',
            'children.*.middle_name' => 'required|regex:/^[a-zA-Z0-9\s]+$/',
            'children.*.last_name' => 'required|regex:/^[a-zA-Z0-9\s]+$/',
            'children.*.age' => 'required|integer',
            'children.*.gender' => 'required|string',
            'children.*.different_address' => 'boolean',
            'children.*.address' => 'nullable|string',
            'children.*.city' => 'nullable|string',
            'children.*.state' => 'nullable|string',
            'children.*.country' => 'nullable|string',
            'children.*.zip' => 'nullable|integer',
        ]);

        foreach ($request->children as $child) {
            if (isset($child['id'])) {
                Child::findOrFail($child['id'])->update($child);
            } else {
                Child::create($child);
            }
        }

        return back()->with('success', 'Children saved successfully!');
    }


    public function destroy($id)
    {
        $child = Child::find($id);
        $child->delete();

        return back()->with('success', 'Child deleted successfully!');
    }
}
