<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $num01 = $request->input('num01');
        $num02 = $request->input('num02');
        $operation = $request->input('operations');

        switch ($operation) {
            case '+':
                $result = $num01 + $num02;
                break;
            
            case '-':
                $result = $num01 - $num02;
                break;

            case '*':
                $result = $num01 * $num02;
                break;

            case '/':
                $result = $num01 / $num02;
                break;
        }

        return view('calculator', ['result' => $result]);
    }
}