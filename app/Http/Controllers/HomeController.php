<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AshAllenDesign\LaravelExchangeRates\Classes\ExchangeRate;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $exchangeRates = new ExchangeRate();
        return view('home')->with('monVal', $exchangeRates->currencies());
    }

    public function convertAmount(Request $request)
    {
        $input = $request->all();
        $exchangeRates = new ExchangeRate();
        $result = $exchangeRates->convert($input['amount'], $input['to'], $input['from'], Carbon::now());
        return response()->json([
            'data' => $result,
            'msj' => "data consultada",
            'success' => true
        ]);
    }
}
