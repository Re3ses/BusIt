<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class editTablesController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'About Us',
            'description' => 'We are a company that provides high-quality services.',
        ];

        return view('pages.edit-tables', $data);
    }

}