<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agency;

class AgencyController extends Controller
{
    public function index()
    {
        $agencies = Agency::get();
        return view('agencies.index', ['agencies' => $agencies]);
    }

    public function show(Agency $agency)
    {
        return view('agencies.show', ['agency' => $agency]);
    }

    public function store(Request $request)
    {
        // Validate
        $validationRules =
        [
            'agency_name'    => 'required|max:255',
            'address_line_1' => 'max:255',
            'address_line_2' => 'max:255',
            'address_line_3' => 'max:255',
            'address_line_4' => 'max:255',
            'postcode'       => 'max:255',
            'phone'          => 'max:255'
        ];

        $this->validate($request, $validationRules);

        // Store user
        $data =
        [
            'agency_name'    => $request->name,
            'address_line_1' => $request->address_line_1,
            'address_line_2' => $request->address_line_2,
            'address_line_3' => $request->address_line_3,
            'address_line_4' => $request->address_line_4,
            'postcode'       => $request->postcode,
            'phone'          => $request->phone,
        ];

        Agency::create($data);

        // Redirect
        return redirect()->route('agency');
    }

}
