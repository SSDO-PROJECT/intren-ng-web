<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class MonthlyUsersChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build()
    {
        return $this->chart->lineChart()
            ->addData('Published posts', [4, 9, 5, 8, 1, 8])
            ->addData('Unpublished posts', [7, 2, 7, 2, 5, 4])
            ->addData('Deleted posts', [3, 5, 6, 9, 5, 1])
            ->setColors(['#ffc63b', '#ff6384', '#ff6384'])
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June'])
            ->setFontFamily('DM Sans');
    }
}
