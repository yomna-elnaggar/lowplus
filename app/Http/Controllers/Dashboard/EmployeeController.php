<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Category;
use App\Models\Jobtitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function index()
    {
        $users =  User::get();
        $categories =  Category::select('id','name')->get();
        $jobtitles =  Jobtitle::select('id','name')->get();
        return view('dashboard.employee.index',compact('users','categories','jobtitles'));
    }

    public function create()
    {
        $categories =  Category::select('id','name')->get();
        $jobtitles =  Jobtitle::select('id','name')->get();
        return view('dashboard.employee.form',compact('categories','jobtitles'));
    }

    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'password' => 'required|string|min:6|confirmed',
            'phone' => 'required|string',
            'address' => 'nullable|string',
            'national_id' => 'nullable|string',
            'category_id' => 'nullable|integer',
            'jobtitle_id' => 'nullable|integer',
        ]);
    
       
        $file_url = 'user.png';
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $file_name = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/employee/'), $file_name);
            $file_url = 'upload/employee/' . $file_name;
        }
    
        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'logo' => $file_url,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'created_by' => $request->created_by,
            'salary' => $request->salary,
            'address' => $request->address,
            'national_id' => $request->national_id,
            'category_id' => $request->category_id,
            'jobtitle_id' => $request->jobtitle_id,
        ]);
    
        return redirect()->route('employee.index')->with('success', 'New customer record added successfully.');
       
    }
    
    public function edit(string $id)
    {
        $employee = User::findOrFail($id);
        $categories =  Category::select('id','name')->get();
        $jobtitles =  Jobtitle::select('id','name')->get();

        return view('dashboard.employee.edit' ,compact('employee','categories','jobtitles'));
    }

    public function update(Request $request, $id)
    {
        $employee = User::findOrFail($id);
    
        $validated = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $employee->id,
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'password' => 'nullable|string|min:6|confirmed',
            'phone' => 'required|string',
            'address' => 'nullable|string',
            'national_id' => 'nullable|string',
            'category_id' => 'nullable|integer',
            'jobtitle_id' => 'nullable|integer',
        ]);
    
        $file_url = $employee->logo;
        if ($request->hasFile('logo')) {
            // if ($file_url && file_exists(public_path($file_url))) {
            //     unlink(public_path($file_url));
            // }
    
            $file = $request->file('logo');
            $file_name = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/employee/'), $file_name);
            $file_url = 'upload/employee/' . $file_name;
        }
    
        $employee->update([
            'name' => $request->name,
            'email' => $request->email,
            'logo' => $file_url,
            'password' => $request->password ? Hash::make($request->password) : $employee->password,
            'phone' => $request->phone,
            'address' => $request->address,
            'national_id' => $request->national_id,
            'category_id' => $request->category_id,
            'jobtitle_id' => $request->jobtitle_id,
        ]);
    
        return redirect()->route('employee.index')->with('success', 'Employee record updated successfully.');
    }
    
    public function destroy(string $id)
    {
        $User = User::findOrFail($id);
        $User->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    }

    public function updateStatus(Request $request)
    {
        $employee = User::find($request->id);
        $employee->status = $employee->status == 'active' ? 'inactive' : 'active';
        $employee->save();

        return response()->json(['status' => $employee->status]);
    }
}
