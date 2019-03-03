<?php
namespace Shetabit\Base\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Shetabit\Base\Base;

class HomeController extends Controller
{

    public function index()
    {
        Base::all();
        return view('shetabit-base::index');
    }

    public function store(Request $request)
    {

    }
}
