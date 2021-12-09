<?php

namespace Modules\NotificationModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NotificationController extends Controller
{
   public function getUserNotification()
   {
        return view('usermodule::website.notification.index');
   }
}
