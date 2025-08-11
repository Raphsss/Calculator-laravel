<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function indexCalculator()
    {
        return view('calculator');
    }

    public function indexAverage()
    {
        return view('average-calc');
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

    public function calculateAverage(Request $request)
    {
        $num01 = $request->input('num01');
        $num02 = $request->input('num02');
        $num03 = $request->input('num03');

        $average = ($num01 + $num02 + $num03) / 3;

        return view('average-calc', ['result' => $average]);
    }
}
