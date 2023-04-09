<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use Revolution\Google\Sheets\Facades\Sheets;

class TestController extends Controller
{
    public function save(TestRequest $request){

        Sheets::spreadsheet('1dLukIy0sy3JFvGFa133PWSrd0WuXXuUAVV2hY4xpKQ8')
            ->sheet('Sheet')->append([
            [$request->phone, $request->comment]
        ]);

        return view('test')->with(['success' => 'Data sent successfully!']);
    }

    public function show(){
        return view('test');
    }
}
