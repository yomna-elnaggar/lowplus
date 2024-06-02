<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Issue;
use App\Models\Customer;
use App\Models\IsuesType;
use App\Models\IssuesCase;
use App\Models\IssuesPhase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class IssuesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Issues =  Issue::get();
        $IsuesType =  IsuesType::select('id','name')->get();
        $IssuesCase =  IssuesCase::select('id','name')->get();
        $IssuesPhase =  IssuesPhase::select('id','name')->get();

        $Issues = $Issues->map(function ($Issue) {
            $Issue->IsuesType_name = optional($Issue->isuesType)->name ?? '-';
            $Issue->IssuesCase_name = optional($Issue->issuesCase)->name ?? '-';
            $Issue->IssuesPhase_name = optional($Issue->issuesPhase)->name ?? '-';
            return $Issue; 
          });
        return view('dashboard.issues.index',compact('Issues','IssuesCase','IssuesPhase'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Customers =  Customer::select('id','name')->get();
        $IsuesType =  IsuesType::select('id','name')->get();

        return view('dashboard.issues.form',compact('Customers','IsuesType'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = Validator::make($request->all(), [
            'name' => 'required|string',
            'issue_number' => 'required|string',
            'issue_date' => 'required|date',
            'issue_amount' => 'nullable|numeric',
            'customer_id' => 'required|exists:customers,id',
            'isues_type_id' => 'required|exists:isues_types,id',
            'contender_name' => 'nullable|string',
            'contender_phone' => 'nullable|string',
            'contender_address' => 'nullable|string',
            'contender_attorney' => 'nullable|string',
            'contender_attorney_phone' => 'nullable|string',
            'court' => 'nullable|string',
            'court_city' => 'nullable|string',
            'court_crcle' => 'nullable|string',
            'judge_name' => 'nullable|string',
            'pleading_degree' => 'nullable|string',
            'files.*' => 'nullable|file|max:2048'
        ]);
    
        if ($validated->fails()) {
            return redirect()->back()->withErrors($validated)->withInput();
        }
    
        DB::beginTransaction();
        try {
    
            $files_urls = [];
            if ($request->hasFile('files')) {
                foreach ($request->file('files') as $file) {
                    $file_name = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('upload/issues/files/'), $file_name);
                    $files_urls[] = 'upload/issues/files/' . $file_name;
                }
            }
    
            Issue::create([
                'name' => $request->name,
                'issue_number' => $request->issue_number,
                'issue_date' => $request->issue_date,
                'issue_amount' => $request->issue_amount,
                'customer_id' => $request->customer_id,
                'isues_type_id' => $request->isues_type_id,
                'contender_name' => $request->contender_name,
                'contender_phone' => $request->contender_phone,
                'contender_address' => $request->contender_address,
                'contender_attorney' => $request->contender_attorney,
                'contender_attorney_phone' => $request->contender_attorney_phone,
                'court' => $request->court,
                'court_city' => $request->court_city,
                'court_crcle' => $request->court_crcle,
                'judge_name' => $request->judge_name,
                'pleading_degree' => $request->pleading_degree,
                'files' => json_encode($files_urls),
            ]);
    
            DB::commit();
            return redirect()->route('issues.index')->with('success', 'New issue case added successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('fail', 'Failed to add new issue case.');
        }
    }
    




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Issue = Issue::findOrFail( $id);
        $Issue->IsuesType_name = optional($Issue->isuesType)->name ?? '-';
        $Issue->IssuesCase_name = optional($Issue->issuesCase)->name ?? '-';
        $Issue->IssuesPhase_name = optional($Issue->issuesPhase)->name ?? '-';

        return view('dashboard.issues.view',compact('Issue'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Customers =  Customer::select('id','name')->get();
        $issue = Issue::find($id);
        $IsuesType =  IsuesType::select('id','name')->get();

        return view('dashboard.issues.edit',compact('issue','Customers','IsuesType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = Validator::make($request->all(), [
            'name' => 'required|string',
            'issue_number' => 'required|string',
            'issue_date' => 'required|date',
            'issue_amount' => 'nullable|numeric',
            'customer_id' => 'required|exists:customers,id',
            'isues_type_id' => 'required|exists:isues_types,id',
            'contender_name' => 'nullable|string',
            'contender_phone' => 'nullable|string',
            'contender_address' => 'nullable|string',
            'contender_attorney' => 'nullable|string',
            'contender_attorney_phone' => 'nullable|string',
            'court' => 'nullable|string',
            'court_city' => 'nullable|string',
            'court_crcle' => 'nullable|string',
            'judge_name' => 'nullable|string',
            'pleading_degree' => 'nullable|string',
            'files.*' => 'nullable|file|max:2048'
        ]);

        if ($validated->fails()) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        DB::beginTransaction();
        try {
            $issue = Issue::findOrFail($id);

            // Handle file uploads
            $files_urls = json_decode($issue->files, true) ?? [];
            if ($request->hasFile('files')) {
                foreach ($request->file('files') as $file) {
                    $file_name = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('upload/issues/files/'), $file_name);
                    $files_urls[] = 'upload/issues/files/' . $file_name;
                }
            }

            $issue->update([
                'name' => $request->name,
                'issue_number' => $request->issue_number,
                'issue_date' => $request->issue_date,
                'issue_amount' => $request->issue_amount,
                'customer_id' => $request->customer_id,
                'isues_type_id' => $request->isues_type_id,
                'contender_name' => $request->contender_name,
                'contender_phone' => $request->contender_phone,
                'contender_address' => $request->contender_address,
                'contender_attorney' => $request->contender_attorney,
                'contender_attorney_phone' => $request->contender_attorney_phone,
                'court' => $request->court,
                'court_city' => $request->court_city,
                'court_crcle' => $request->court_crcle,
                'judge_name' => $request->judge_name,
                'pleading_degree' => $request->pleading_degree,
                'files' => json_encode($files_urls),
            ]);

            DB::commit();
            return redirect()->route('issues.index')->with('success', 'Issue updated successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('fail', 'Failed to update issue.');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function updateCase(Request $request, $id)
    {
        $issue = Issue::find($id);
        $issue->issues_case_id = $request->case_id;
        $issue->save();

        return response()->json(['success' => 'Issue case updated successfully']);
    }

    public function updatePhase(Request $request, $id)
    {
        $issue = Issue::find($id);
        $issue->issues_phase_id = $request->phase_id;
        $issue->save();

        return response()->json(['success' => 'Issue phase updated successfully']);
    }

    public function destroy(string $id)
    {
        $issue = Issue::findOrFail($id);
        
        if ($issue->files) {
            $files = json_decode($issue->files, true);
            foreach ($files as $file) {
                if (file_exists(public_path($file))) {
                    unlink(public_path($file));
                }
            }
        }
        $issue->delete();

        return redirect()->back()->with('success', 'Issue deleted successfully');
    }

}
