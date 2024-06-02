<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\IssuesCase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class IssuesCaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $IssuesCase = IssuesCase::get();
        return view('dashboard.issues_case.index',compact('IssuesCase'));
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

            IssuesCase::create([
                'name' => $request->name,
            ]);

            DB::commit();
            return redirect()->route('issues_case.index')->with('success', 'Case record saved successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('faild', 'Failed to save Case record.');
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

            $IssuesCase = IssuesCase::findOrFail($id);
            $IssuesCase->update([
                'name' => $request->name,
            ]);

            DB::commit();
            return redirect()->route('issues_case.index')->with('success', 'Case record saved successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('faild', 'Failed to save Case record.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $IssuesCase = IssuesCase::findOrFail($id);
        $IssuesCase->delete();
        return redirect()->back()->with('success', 'IssuesCase deleted successfully');
    }
}
