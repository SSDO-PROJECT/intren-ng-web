<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CompanyCotroller extends Controller
{
    public function view ()
    {
        return view('pages.company', [
            'company' => User::class
        ]);
    }
}
