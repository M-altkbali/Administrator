<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Trait\pharmacyTrait;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    use pharmacyTrait;

    public function index()
    {
        $brands = Brand::all();
        return view('brands.index', compact('brands'));
    }


    public function create()
    {
        return view('brands.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'brand_name' => 'required',
        ]);

        $brand = new Brand();
        $brand->brand_name = strip_tags($request->input('brand_name'));
        $brand->notes = strip_tags($request->input('notes'));

        // Save Logo in folder

        $file_name = $this->storImage($request->brand_logo, 'images/Brands');
        $brand->logo = $file_name;

        $brand->save();
        return redirect()->route('brands.index');
    }


    public function show($id)
    {
        $index =Brand::findorFail($id);
        return view('brands.show',['brand'=>$index]);
    }


    public function edit($id)
    {
        $index = Brand::FindOrFail($id);
        return view('brands.edit', ['brand' => Brand::findOrFail($id)]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'brand_name' => 'required',
        ]);

        $to_update =Brand::findorFail($id);
        $to_update->brand_name = strip_tags($request->input('brand_name'));
        $to_update->notes = strip_tags($request->input('notes'));


        // Save Logo in folder

        $input = $request->all();

        $image = $request->brand_logo;
        if ($image = $request->file('brand_logo')) {
            $file_name = $this->storImage($image, 'images/Brands');
            $to_update->logo = $file_name;
        } else {
            unset($input['image']);
        }

        $to_update->save();
        return redirect()->route('brands.index');
    }


    public function destroy($id)
    {
        $to_delete = Brand::findorFail($id);
        $to_delete->delete();
        return redirect()->route('brands.index');
    }
}
