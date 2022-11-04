<?php

use Illuminate\Support\Facades\Http;

function getLatest(){
    $theUrl     = env('EXCHANGE_RATES_API_URL') . '/latest?access_key=' . env('EXCHANGE_RATES_API_KEY');
    $currencies   = Http::get($theUrl);
    return $currencies;
}
