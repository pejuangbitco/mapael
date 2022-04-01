<?php

namespace App\Controllers;

class Grafik extends BaseController
{
  public function __construct()
  {
  }

  public function index() {
    // return view('layout_manual');
    // return view('layout', [
		// 	'title' => 'Data Pelatihan',
    //   'page'  => 'grafik.php',
		// 	'data'	=> []
		// ]);
    return view('layout_home', [
			'title' => 'Data Pelatihan',
      'page'  => 'newgrafik.php',
			'data'	=> []
		]);
  }
}