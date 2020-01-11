<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HelloController extends Controller
{

    private $fname;

    public function __construct()
    {
        $this->fname = 'sample.txt';
    }

    public function index(Request $request)
    {
        $eol = explode(PHP_EOL, Storage::disk('public')->get($this->fname));

        $txt = [];
        
        foreach ($eol as $key => $value) {
            $txt[$key] = explode(',', $value);
        }

        $data = [
            'msg' => config('sample.message'),
            'data' => $txt
        ];

        return view('hello.index', $data);
    }

    public function other($msg)
    {
        Storage::disk('public')->put('hoge.txt', 'hogehoge');

        return redirect('/hello');
    }

    public function detail($person)
    {
        $data = [
            'msg' => $person
        ];

        return view('hello.detail', $data);
    }
}
