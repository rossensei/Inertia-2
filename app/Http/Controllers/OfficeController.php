<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Office;

class OfficeController extends Controller
{
    public function index() {

        $offices = Office::get();

        return inertia("Offices",[
            'offices' => $offices
        ]);
    }
}
