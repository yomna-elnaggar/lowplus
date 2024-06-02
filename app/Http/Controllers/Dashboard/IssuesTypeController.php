<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\IsuesType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class IssuesTypeController extends Controller
{
    

    public function index()
    {
        $IsuesType = IsuesType::get();
        return view('dashboard.issues_type.index',compact('IsuesType'));
    }

    
    public function store(Request $request )
    {
       // dd($request->all());
        $validated = Validator::make($request->all(), ['name' => 'required|string']);

        if ($validated->fails()) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        DB::beginTransaction();
        try {

            IsuesType::create([
                'name' => $request->name,
            ]);

            DB::commit();
            return redirect()->route('issues_type.index')->with('success', 'Type record saved successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('faild', 'Failed to save Type record.');
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = Validator::make($request->all(), ['name' => 'required|string']);

        if ($validated->fails()) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        DB::beginTransaction();
        try {

            $IsuesType = IsuesType::findOrFail($id);
            $IsuesType->update([
                'name' => $request->name,
            ]);

            DB::commit();
            return redirect()->route('issues_type.index')->with('success', 'Type record saved successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('faild', 'Failed to save Type record.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $IsuesType = IsuesType::findOrFail($id);
        $IsuesType->delete();
        return redirect()->back()->with('success', 'IsuesType deleted successfully');
    }
}
