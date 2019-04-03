<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
      $task = [
        'Go to store',
        'Go to market',
        'Go to work'
      ];

      // return view('welcome')->withTask($task)->withFoo('foobar'); //passing variable method

      return view('welcome', [
        'task' => $task,
        'foo' => 'foobar'
        //'foo' => request('title') //get data from $_GET
      ]);
    }

    public function about() {
      return view('about');
    }
      public function contact() {
        return view('contact');
      }
}
