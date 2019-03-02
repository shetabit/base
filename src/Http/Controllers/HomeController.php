<?php
namespace Shetabit\Components\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Shetabit\Components\Components;

class HomeController extends Controller
{

    public function index()
    {
        Components::all();
        return view('shetabit-components::index');
    }

    public function store(Request $request)
    {

    }
}
