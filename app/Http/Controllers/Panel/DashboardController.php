<?php

namespace App\Http\Controllers\Panel;

use App\Models\Biodata;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $data_isExist = Biodata::where('user_id', Auth::id())->count() > 0;
        // die($data_isExist);
        return view('user-page.dashboard.index', compact('data_isExist'));
    }
}
