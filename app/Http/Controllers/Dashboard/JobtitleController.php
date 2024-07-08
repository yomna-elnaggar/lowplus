<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Jobtitle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class JobtitleController extends Controller
{
    public function index()
    {
        $jobtitles =  Jobtitle::get();
        return view('dashboard.employee.jobtitle',compact('jobtitles'));
    }

    public function store(Request $request )
    {
       
        $validated = Validator::make($request->all(), ['name' => 'required|string']);

        if ($validated->fails()) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        DB::beginTransaction();
        try {

            Jobtitle::create([
                'name' => $request->name,
            ]);

            DB::commit();
            return redirect()->route('jobtitle.index')->with('success', 'phase record saved successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('faild', 'Failed to save phase record.');
        }
    }


  
    public function update(Request $request, string $id)
    {
        $validated = Validator::make($request->all(), ['name' => 'required|string']);

        if ($validated->fails()) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        DB::beginTransaction();
        try {

            $Jobtitle = Jobtitle::findOrFail($id);
            $Jobtitle->update([
                'name' => $request->name,
            ]);

            DB::commit();
            return redirect()->route('jobtitle.index')->with('success', 'Jobtitle record saved successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('faild', 'Failed to save phase record.');
        }
    }

    
    public function destroy(string $id)
    {
        $Jobtitle = Jobtitle::findOrFail($id);
        $Jobtitle->delete();
        return redirect()->back()->with('success', 'Jobtitle deleted successfully');
    }

    public function updateStatus(Request $request)
    {
            $validatedData = $request->validate([
                'id' => 'required|exists:jobtitles,id',
                'status' => 'required|in:active,inactive'
            ]);

            $Jobtitle = Jobtitle::find($request->id);
            $Jobtitle->status = $request->status;
            $Jobtitle->save();

            return response()->json(['message' => trans('message.success')], 200);
       
    }

}
