<?php

namespace MyVendor\Calculator\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller; 
class CalculatorController extends Controller
{
    public function add($a, $b)
    {
        return [
            'status' => 'success',
            'operation' => 'addition',
            'result' => $a + $b
        ];
    }

    public function subtract($a, $b)
    {
        return [
            'status' => 'success',
            'operation' => 'subtraction',
            'result' => $a - $b
        ];
    }

    public function multiply($a, $b)
    {
        return [
            'status' => 'success',
            'operation' => 'multiplication',
            'result' => $a * $b
        ];
    }

    public function divide($a, $b)
    {
        if ($b == 0) {
            return [
                'status' => 'error',
                'message' => 'Division by zero is not allowed.'
            ];
        }

        return [
            'status' => 'success',
            'operation' => 'division',
            'result' => $a / $b
        ];
    }
}
