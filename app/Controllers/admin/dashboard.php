<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dasboard extends Controller
{
  public function index()
  {
    echo view('templates_admin/header');
    echo view('templates_admin/sidebar');
    echo view('admin/dashboard');
    echo view('templates_admin/footer');
  }
}
