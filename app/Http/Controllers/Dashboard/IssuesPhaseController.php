<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\IssuesPhase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class IssuesPhaseController extends Controller
{
    
    public function index()
    {
        $IssuesPhase = IssuesPhase::get();
        return view('dashboard.issues_phase.index',compact('IssuesPhase'));
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

            IssuesPhase::create([
                'name' => $request->name,
            ]);

            DB::commit();
            return redirect()->route('issues_phase.index')->with('success', 'phase record saved successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('faild', 'Failed to save phase record.');
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

            $IssuesPhase = IssuesPhase::findOrFail($id);
            $IssuesPhase->update([
                'name' => $request->name,
            ]);

            DB::commit();
            return redirect()->route('issues_phase.index')->with('success', 'phase record saved successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('faild', 'Failed to save phase record.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $IssuesPhase = IssuesPhase::findOrFail($id);
        $IssuesPhase->delete();
        return redirect()->back()->with('success', 'IssuesPhase deleted successfully');
    }
}
