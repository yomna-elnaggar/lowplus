<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {
        $categories =  Category::get();
        return view('dashboard.employee.category',compact('categories'));
    }

    public function store(Request $request )
    {
       
        $validated = Validator::make($request->all(), ['name' => 'required|string']);

        if ($validated->fails()) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        DB::beginTransaction();
        try {

            Category::create([
                'name' => $request->name,
            ]);

            DB::commit();
            return redirect()->route('category.index')->with('success', 'phase record saved successfully.');
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

            $Category = Category::findOrFail($id);
            $Category->update([
                'name' => $request->name,
            ]);

            DB::commit();
            return redirect()->route('category.index')->with('success', 'Category record saved successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('faild', 'Failed to save phase record.');
        }
    }

    
    public function destroy(string $id)
    {
        $Category = Category::findOrFail($id);
        $Category->delete();
        return redirect()->back()->with('success', 'Category deleted successfully');
    }

    public function updateStatus(Request $request)
    {
            $validatedData = $request->validate([
                'id' => 'required|exists:categories,id',
                'status' => 'required|in:active,inactive'
            ]);

            $Category = Category::find($request->id);
            $Category->status = $request->status;
            $Category->save();

            return response()->json(['message' => trans('message.success')], 200);
       
    }

}
