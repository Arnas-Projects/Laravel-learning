<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumStorageController extends Controller
{
    public function showStorageForm()
    {
        return view('forms.post_storage');
    }

    public function storeNumber(Request $req)
    {
        $number = $req->input('numberInput1');

        $numbers = session('numbers', []);

        $numbers[] = $number;

        session(['numbers' => $numbers]);

        return redirect()->route('show-numbers');
    }

    public function showNumbers()
    {
        $numbers = session('numbers', []);

        return view('forms.post_storage_result', ['numbers' => $numbers]);
    }

    public function clearNumbers()
    {
        session()->forget('numbers');

        return redirect()->route('show-numbers');
    }
}
