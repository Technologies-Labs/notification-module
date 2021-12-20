<?php

namespace Modules\Notification\Traits;

use Modules\Notification\Entities\Notification;

trait NotificationTrait
{
    public function createNotification($user, $type, $message)
    {
        $notification = new Notification();
        $notification->user_id = $user->id;
        $notification->type = $type;
        $notification->message = $message;
        $notification->save();
    }
}
