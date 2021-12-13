<?php

namespace App\Controllers;

class Home extends BaseController
{
  public function index()
  {
    $data['page'] = [
      'title' => 'Dashboard',
      'route' => 'Dashboard'
    ];

    return view('index', $data);
  }
}
