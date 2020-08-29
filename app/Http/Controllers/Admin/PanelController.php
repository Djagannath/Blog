<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PanelController extends Controller
{
  /** Start page for admin panel */
  public function index()
  {
    $title = __('Admin panel');

    return view('admin/index')
      ->with(compact(
        'title'
      ));
  }
}
