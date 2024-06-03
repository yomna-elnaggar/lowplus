<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Issue;
use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $session = Session::get();
        return view('dashboard.sessions.index',compact('session'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $issue = Issue::select('id','name')->get();
        return view('dashboard.sessions.form',compact('issue'));
    }

    public function store(Request $request)
    {
       // dd($request->all());
        $validated = Validator::make($request->all(), [
            'name' => 'required|string',
            'issue_id' => 'required|exists:issues,id',
            'sessionDateTime' => 'nullable',
            'session_require' => 'nullable|string',
            'session_link' => 'nullable',
            'note' => 'nullable|string',
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
                    $file->move(public_path('upload/sessions/files/'), $file_name);
                    $files_urls[] = 'upload/sessions/files/' . $file_name;
                }
            }

            Session::create([
                'name' => $request->name,
                'issue_id' => $request->issue_id,
                'sessionDateTime' => $request->sessionDateTime,
                'session_require' => $request->session_require,
                'session_link' => $request->session_link,
                'note' => $request->note,
                'files' => json_encode($files_urls),
                'court' => $request->court,
                'court_city' => $request->court_city,
                'court_crcle' => $request->court_crcle,
                'judge_name' => $request->judge_name,
                'pleading_degree' => $request->pleading_degree,
            ]);

            DB::commit();
            return redirect()->route('sessions.index')->with('success', 'Session added successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('fail', 'Failed to add session.');
        }
    }

    public function show(string $id)
    {
        $session = Session::findOrFail($id);
        return view('dashboard.sessions.view',compact('session'));
    }

    
    public function edit(string $id)
    {
        $session = Session::findOrFail($id);
        $issues = Issue::select('id','name')->get();
        return view('dashboard.sessions.edit',compact('session','issues'));
    }

   
    public function update(Request $request, $id)
    {
        $validated = Validator::make($request->all(), [
            'name' => 'required|string',
            'issue_id' => 'required|exists:issues,id',
            'sessionDateTime' => 'nullable',
            'session_require' => 'nullable|string',
            'session_link' => 'nullable',
            'note' => 'nullable|string',
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
            $session = Session::findOrFail($id);
    
            $files_urls = json_decode($session->files, true) ?: [];
            if ($request->hasFile('files')) {
                foreach ($request->file('files') as $file) {
                    $file_name = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('upload/sessions/files/'), $file_name);
                    $files_urls[] = 'upload/sessions/files/' . $file_name;
                }
            }
    
            $session->update([
                'name' => $request->name,
                'issue_id' => $request->issue_id,
                'sessionDateTime' => $request->sessionDateTime,
                'session_require' => $request->session_require,
                'session_link' => $request->session_link,
                'note' => $request->note,
                'files' => json_encode($files_urls),
                'court' => $request->court,
                'court_city' => $request->court_city,
                'court_crcle' => $request->court_crcle,
                'judge_name' => $request->judge_name,
                'pleading_degree' => $request->pleading_degree,
            ]);
    
            DB::commit();
            return redirect()->route('sessions.index')->with('success', 'Session updated successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('fail', 'Failed to update session.');
        }
    }
    

    
    public function destroy(string $id)
    {
        $Session = Session::findOrFail($id);
        
        if ($Session->files) {
            $files = json_decode($Session->files, true);
            foreach ($files as $file) {
                if (file_exists(public_path($file))) {
                    unlink(public_path($file));
                }
            }
        }
        $Session->delete();

        return redirect()->back()->with('success', 'Session deleted successfully');
    }
}
