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
    $menu = json_encode([
      [
        'block' => 'block 1', 'opened' => true,
        'children' => [
          [
            'menu' => 'menu 1.1', 'opened' => true,
            'children' => [
              ['title' => 'title 1.1.1'],
              ['title' => 'title 1.1.2'],
              ['title' => 'title 1.1.3'],
              ['title' => 'title 1.1.4'],
              ['title' => 'title 1.1.5'],
            ]
          ],
          [
            'menu' => 'menu 1.2', 'opened' => true,
            'children' => [
              ['title' => 'title 1.2.1', 'active' => true],
              ['title' => 'title 1.2.2'],
              ['title' => 'title 1.2.3'],
              ['title' => 'title 1.2.4'],
              ['title' => 'title 1.2.5'],
            ]
          ]
        ]
      ],
      [
        'block' => 'block 2', 'opened' => true,
        'children' => [
          [
            'menu' => 'menu 2.1', 'opened' => true,
            'children' => [
              ['title' => 'title 2.1.1'],
              ['title' => 'title 2.1.2'],
              ['title' => 'title 2.1.3'],
              ['title' => 'title 2.1.4'],
              ['title' => 'title 2.1.5'],
            ]
          ]
        ]
      ],
    ]);

    return view('admin/index')
      ->with(compact(
        'title', 'menu'
      ));
  }
}
