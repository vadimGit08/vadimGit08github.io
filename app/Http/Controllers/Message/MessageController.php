<?php

namespace App\Http\Controllers\Message;

use App\Http\Controllers\Controller;
use App\Service\Message\Service;

class MessageController extends Controller
{
    public $service;
    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
