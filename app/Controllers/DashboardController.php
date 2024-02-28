<?php

namespace App\Controllers;

class DashboardController extends BaseController
{
    public function dashboard()
    {
        return view('dashboard/dashboard.php');
    }
}
