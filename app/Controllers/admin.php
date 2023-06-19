<?php

namespace App\Controllers;

class admin extends BaseController
{
    public function index()
    {
        return view('admin/dashboardadmin');
    }

    public function Pengajuan()
    {

        return view('admin/pengajuan');
    }
}
