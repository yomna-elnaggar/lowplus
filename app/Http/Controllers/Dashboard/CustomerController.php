<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
//use Flasher\Toastr\Prime\ToastrInterface;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Customers =  Customer::get();
        return view('dashboard.customer.index',compact('Customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lastCustomer = Customer::orderBy('customer_number', 'desc')->first();
        $customer_number = $lastCustomer ? $lastCustomer->customer_number + 1 : 1;
        
        return view('dashboard.customer.form', compact('customer_number'));
    }

    public function store(Request $request)
    {
     // dd($request->all());
        $validated = Validator::make($request->all(), [
            'customer_number' => 'required|string',
            'name' => 'required|string',
            'phone' => 'required|string',
            'country' => 'nullable|string',
            'city' => 'nullable|string',
            'region' => 'nullable|string',
            'address' => 'nullable|string',
            'type' => 'nullable|string',
            'national_id' => 'nullable|string',
            'tax_number2' => 'nullable|string',
            'tax_number' => 'nullable|string',
            'email' => 'nullable|string',
            'password' => 'nullable|string',
            'tax_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'national_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'files.*' => 'nullable|file|max:2048' 
        ]);

        if ($validated->fails()) {
            return redirect()->back()->withErrors($validated)->withInput();
        }
        DB::beginTransaction();
        try {
            $save_url =$request->hasFile('image')? $this->uploadFile($request, 'image', 'upload/customer/'):'upload/customer/customer.png' ;
            $national_image_url = $this->uploadFile($request, 'national_image', 'upload/customer/National/');
            $tax_image_url = $this->uploadFile($request, 'tax_image', 'upload/customer/Tax/');
            
            $files_urls = [];
            if ($request->hasFile('files')) {
                foreach ($request->file('files') as $file) {
                    $file_name = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('upload/customer/Files/'), $file_name);
                    $files_urls[] = 'upload/customer/Files/' . $file_name;
                }
            }

            Customer::create([
                'customer_number' => $request->customer_number,
                'name' => $request->name,
                'phone' => $request->phone,
                'country' => $request->country,
                'city' => $request->city,
                'region' => $request->region,
                'address' => $request->address,
                'type' => $request->type,
                'national_id' => $request->national_id,
                'tax_number2' => $request->tax_number2,
                'tax_number' => $request->tax_number,
                'email' => $request->email,
                'password' => $request->password,
                'tax_image' => $tax_image_url,
                'image' => $save_url,
                'national_image' => $national_image_url,
                'files' => json_encode($files_urls),
            ]);

     
            return redirect()->route('customer.index')->with('success', 'New customer record added successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('faild','Failed to add new customer record.');
        }
    }

    private function uploadFile($request, $fieldName, $uploadPath)
    {
        if ($request->hasFile($fieldName)) {
            $file = $request->file($fieldName);
            $file_name = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($uploadPath), $file_name);
            return $uploadPath . $file_name;
        }
        return null;
    }

    public function show(string $id)
    {
        $customer = Customer::findOrFail($id);
        $files = json_decode($customer->files, true) ?: [];
        //dd($files);
        return view('dashboard.customer.view', compact('customer', 'files'));
    }

    public function edit(string $id)
    {
        $customer = Customer::findOrFail($id);

        return view('dashboard.customer.edit' ,compact('customer'));
    }

    public function update(Request $request, string $id)
    {
        $validated = Validator::make($request->all(), [
            'customer_number' => 'required|string',
            'name' => 'required|string',
            'phone' => 'required|string',
            'country' => 'nullable|string',
            'city' => 'nullable|string',
            'region' => 'nullable|string',
            'address' => 'nullable|string',
            'type' => 'nullable|string',
            'national_id' => 'nullable|string',
            'tax_number2' => 'nullable|string',
            'tax_number' => 'nullable|string',
            'email' => 'nullable|string',
            'password' => 'nullable|string',
            'tax_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'national_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'files.*' => 'nullable|file|max:2048'
        ]);

        if ($validated->fails()) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        DB::beginTransaction();
        try {
            $customer = Customer::findOrFail($id);

            $save_url = $customer->image;
            if ($request->hasFile('image')) {
                $save_url = $this->uploadFile($request, 'image', 'upload/customer/');
            }

            $national_image_url = $customer->national_image;
            if ($request->hasFile('national_image')) {
                $national_image_url = $this->uploadFile($request, 'national_image', 'upload/customer/National/');
            }

            $tax_image_url = $customer->tax_image;
            if ($request->hasFile('tax_image')) {
                $tax_image_url = $this->uploadFile($request, 'tax_image', 'upload/customer/Tax/');
            }

            $files_urls = json_decode($customer->files, true) ?: [];
            if ($request->hasFile('files')) {
                foreach ($request->file('files') as $file) {
                    $file_name = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('upload/customer/Files/'), $file_name);
                    $files_urls[] = 'upload/customer/Files/' . $file_name;
                }
            }

            $customer->update([
                'customer_number' => $request->customer_number,
                'name' => $request->name,
                'phone' => $request->phone,
                'country' => $request->country,
                'city' => $request->city,
                'region' => $request->region,
                'address' => $request->address,
                'type' => $request->type,
                'national_id' => $request->national_id,
                'tax_number2' => $request->tax_number2,
                'tax_number' => $request->tax_number,
                'email' => $request->email,
                'password' => $request->password,
                'tax_image' => $tax_image_url,
                'image' => $save_url,
                'national_image' => $national_image_url,
                'files' => json_encode($files_urls),
            ]);

            DB::commit();
            return redirect()->route('customer.index')->with('success', 'Customer record updated successfully.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('faild', 'Failed to update customer record.');
        }
    }


    public function destroy(string $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->back()->with('success', 'Customer deleted successfully');
    }
}
