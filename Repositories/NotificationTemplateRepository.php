<?php

namespace Modules\Notification\Repositories;

use League\Fractal\Resource\Item;
use Modules\Notification\Entities\NotificationTemplate;
use Modules\Notification\Transformers\NotificationTemplateTransformer;

class NotificationTemplateRepository
{
    public function getNotificationContext($key)
    {
        $template =  NotificationTemplate::where('key',$key)->first();
        return new Item($template , new NotificationTemplateTransformer());
    }
}
