<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\CategoryPermission;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function __construct()
    {
        // $this->middleware('permission:role.index')->only('index');
        // $this->middleware('permission:role.create')->only(['create', 'store']);
        // $this->middleware('permission:role.view')->only('show');
        // $this->middleware('permission:role.edit')->only(['edit', 'update']);
        // $this->middleware('permission:role.delete')->only('destroy');
    }

    public function index()
    {
        $rows = Role::latest()->get();
        return view('dashboard.roles.index', compact('rows'));
    }

    public function create()
    {
        $categories = CategoryPermission::where('name', '!=', 'repository')->orderBy('order')->get();
        $permissions = Permission::get();
        return view('dashboard.roles.create', compact('permissions', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'permissions.*' => 'exists:permissions,id'
        ]);
        $permissions = $request->permissions;
      
        $name = $request->name;
        $role = Role::where('name', $name)->first();

        if($role)
            return redirect()->back()->with(['status' => 'error', 'message' => __('this role exist before')]);

        $row = Role::create(['name' => $name]);
        $row->syncPermissions($permissions);
        return response()->json(['status' => 'success', 'route' =>  route('roles.create')]);
    }

    public function show($id)
    {
        $row  = Role::findOrFail($id);
        return view('dashboard.roles.view', compact('row'));
    }

    public function edit($id)
    {
        $row         = Role::findOrFail($id);
        $categories = CategoryPermission::where('name', '!=', 'repository')->orderBy('order')->get();
        $permissions = Permission::whereNotIn('name', ['repository.delete', 'repository.index', 'repository.create', 'repository.view', 'repository.edit'])->get();
        $selected    = $row->permissions()->pluck('id')->toArray();
        if(!$row->is_main){
            return view('dashboard.roles.edit', compact('row', 'selected', 'permissions', 'categories'));
        }else{
            return redirect()->route('roles.index')->with(['status' => 'error', 'message' => __('canot edit this role ')]);
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'permissions.*' => 'exists:permissions,id'
        ]);
        $permissions = $request->permissions;

        $row = Role::findOrFail($id);
        $row->syncPermissions($permissions);
        return response()->json(['status' => 'success', 'route' =>  route('roles.index')]);
    }

    public function destroy($id)
    {
        $row   = config('permission.models.role')::findOrFail($id);
        if ($row->name == 'admin' || $row->name == 'superAdmin') {
            return redirect()->route('roles.index')->with(['status' => 'error', 'message' => __('You can\'t delete this role')]);
        }
        $row->delete();
        return redirect()->route('roles.index')->with(['status' => 'success', 'message' => __('Deleted successfully')]);
    }
}

