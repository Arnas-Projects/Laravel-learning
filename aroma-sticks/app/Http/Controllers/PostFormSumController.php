<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostFormSumController extends Controller
{
    public function showSumPostForm()
    {
        return view('forms.post');
    }

    public function countSumPostForm(Request $req)
    {
        $num1 = $req->input('numberInput1');
        $num2 = $req->input('numberInput2');

        $text = "$num1 + $num2 = ";

        $sum = $num1 + $num2;

        $finalResult = $text . $sum; 

        // $result = $num1 . ' + ' . $num2 . ' = ' . $num1 + $num2;

        session(['sum' => $finalResult]);

        return redirect()->route('show-result')
        ->with(['sum' => $finalResult]);
    }

    public function showCountedSum()
    {
        $result = session('sum', 'Nėra ką sumuoti');

        return view('forms.post_sum', ['sum' => $result]);
    }
}
