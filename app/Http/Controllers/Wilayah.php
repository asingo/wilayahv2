<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\District;
use App\Models\Postal;
use App\Models\Province;
use App\Models\Subdistrict;
use Illuminate\Http\Request;

class Wilayah extends Controller
{
    public function provinces(Request $request)
    {
        $provinces = Province::orderBy('id', 'ASC')->get();
        return response()->json($provinces, 200);
    }

    public function cities(Request $request)
    {
        $cities = City::where('prov_id', $request->id)->orderBy('id', 'ASC')->get();
        return response()->json($cities, 200);
    }

    public function districts(Request $request)
    {
        $district = District::where('city_id', $request->id)->orderBy('id', 'ASC')->get();
        return response()->json($district);
    }

    public function subdistricts(Request $request)
    {
        $subdistrict = Subdistrict::where('dis_id', $request->id)->orderBy('id', 'ASC')->get();
        return response()->json($subdistrict);
    }

    public function postal(Request $request)
    {
        $postal = Postal::where('subdis_id', $request->id)->orderBy('id', 'ASC')->get();
        return response()->json($postal);
    }
}
