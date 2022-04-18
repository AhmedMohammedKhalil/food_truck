<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Http\Requests\StoreRegionRequest;
use App\Http\Requests\UpdateRegionRequest;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = Region::all();
        return view('admins.regions.index',compact('regions'));
    }


    public function create()
    {
        return view('admins.regions.add');

    }





    public function edit(Request $r)
    {
        $region = Region::whereId($r->id)->first();
        return view('admins.regions.edit',compact('region'));
    }



    public function destroy(Request $r)
    {
        Region::destroy($r->id);
        return redirect()->route('admin.regions.index');
    }
}
