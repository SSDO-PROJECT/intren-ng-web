<?php

namespace App\Http\Controllers;

use App\Charts\MonthlyUsersChart;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index(MonthlyUsersChart $chart)
    {
        return view('pages.dashboard', ['chart' => $chart->build()]);

    }
}
