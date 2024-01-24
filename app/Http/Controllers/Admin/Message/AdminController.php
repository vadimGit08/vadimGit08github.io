<?php

namespace App\Http\Controllers\Admin\Message;

use App\Http\Controllers\Controller;
use App\Service\Admin\Message\Service;


class AdminController extends Controller
{
    public $service;
    public function __construct(Service $service)
    {
        $this->service = $service;
    }
    public function admin()
    {

        return view('layouts.admin');
    }
}
