<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\City;
use App\Models\District;
use App\Models\Province;

class ServiceController extends Controller
{
	public function province(Request $request)
	{
		$provinces = Province::all();
		return response()->json($provinces);
	}

	public function city(Request $request)
	{
		if ( $request->province_id )
			$cities = City::where(['province_id' => $request->province_id])->get();
		else
			$cities = City::all();
		return response()->json($cities);
	}

	public function district(Request $request)
	{
		if ( $request->city_id )
			$districts = District::where(['city_id' => $request->city_id])->get();
		else
			$districts  = District::all();
		return response()->json($districts);
	}
}