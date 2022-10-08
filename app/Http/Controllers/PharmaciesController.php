<?php

namespace App\Http\Controllers;

use App\Http\Requests\pharmacyUpdateRequest;
use App\Trait\pharmacyTrait;
use App\Models\Pharmacie;
use Illuminate\Http\Request;


class PharmaciesController extends Controller
{

    use PharmacyTrait;

    public function index()
    {
        $pharmacies = Pharmacie::all();
        return view('pharmacies.index', compact('pharmacies'));
    }


    public function create()
    {
        return view('pharmacies.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'pharma_name' => 'required',
            'Manager_name' => 'required',
            'phone' => 'required',
            'pharma_email' => 'required',
            'password' => 'required',
        ]);



        $pharmacy = new Pharmacie();
        $pharmacy->pharmacy_name = strip_tags($request->input('pharma_name'));
        $pharmacy->manager_name = strip_tags($request->input('Manager_name'));
        $pharmacy->phone = strip_tags($request->input('phone'));
        $pharmacy->email = strip_tags($request->input('pharma_email'));
        $pharmacy->password = strip_tags($request->input('password'));
        $pharmacy->city = strip_tags($request->input('city'));
        $pharmacy->domain = strip_tags($request->input('domain'));
        $pharmacy->location_lattude = strip_tags($request->input('loc_lat'));
        $pharmacy->location_longtude = strip_tags($request->input('loc_long'));
        $pharmacy->notes = strip_tags($request->input('notes'));


        // Save Logo in folder

        $file_name = $this->storImage($request->pharma_logo, 'images/Pharmacies');
        $pharmacy->logo = $file_name;







        $pharmacy->save();
        return redirect()->route('pharmacies.index');
    }


    public function show($id)
    {

        $index = Pharmacie::findorFail($id);
        return view('pharmacies.show', ['pharmacies' => $index]);
    }


    public function edit($id)
    {
        $index = Pharmacie::FindOrFail($id);
        return view('pharmacies.edit', ['pharmacy' => Pharmacie::findOrFail($id)]);
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'pharma_name' => 'required',
            'Manager_name' => 'required',
            'phone' => 'required',
            'pharma_email' => 'required',
            'password' => 'required',
        ]);

        $to_update = Pharmacie::findorFail($id);
        $to_update->pharmacy_name = strip_tags($request->input('pharma_name'));
        $to_update->manager_name = strip_tags($request->input('Manager_name'));
        $to_update->phone = strip_tags($request->input('phone'));
        $to_update->email = strip_tags($request->input('pharma_email'));
        $to_update->password = strip_tags($request->input('password'));
        $to_update->city = strip_tags($request->input('city'));
        $to_update->domain = strip_tags($request->input('domain'));
        $to_update->location_lattude = strip_tags($request->input('loc_lat'));
        $to_update->location_longtude = strip_tags($request->input('loc_long'));
        $to_update->notes = strip_tags($request->input('notes'));


        // Save Logo in folder

        $input = $request->all();

        $image = $request->pharma_logo;
        if ($image = $request->file('pharma_logo')) {
            $file_name = $this->storImage($image, 'images/Pharmacies');
            $to_update->logo = $file_name;
        } else {
            unset($input['image']);
        }

        $to_update->save();
        return redirect()->route('pharmacies.index');
    }

    public function destroy($id)
    {
        $to_delete = Pharmacie::findorFail($id);
        $to_delete->delete();
        return redirect()->route('pharmacies.index');
    }
}
