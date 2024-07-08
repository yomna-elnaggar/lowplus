<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Taxtype;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaxtypesController extends Controller
{
    public function index()
    {
        $Taxtypes =  Taxtype::get();
        return view('dashboard.taxType.index',compact('Taxtypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string',
            'amount' => 'required|numeric',
        ]);

        Taxtype::create([
            'title' => $request->title,
            'type' => $request->type,
            'amount' => $request->amount,
        ]);

        return redirect()->route('taxtype.index')->with('success', 'Tax type created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string',
            'amount' => 'required|numeric',
        ]);

        $taxtype = Taxtype::findOrFail($id);
        $taxtype->update([
            'title' => $request->title,
            'type' => $request->type,
            'amount' => $request->amount,
        ]);

        return redirect()->route('taxtype.index')->with('success', 'Tax type updated successfully.');
    }

    public function destroy($id)
    {
        $taxtype = Taxtype::findOrFail($id);
        $taxtype->delete();

        return redirect()->route('taxtype.index')->with('success', 'Tax type deleted successfully.');
    }

    public function updateStatus(Request $request)
    {
        $Taxtype = Taxtype::find($request->id);
        $Taxtype->status = $Taxtype->status == 'active' ? 'inactive' : 'active';
        $Taxtype->save();

        return response()->json(['status' => $Taxtype->status]);
    }
}
