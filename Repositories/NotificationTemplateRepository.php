<?php

namespace Modules\NotificationModule\Repositories;

use League\Fractal\Resource\Item;
use Modules\NotificationModule\Entities\NotificationTemplate;
use Modules\NotificationModule\Transformers\NotificationTemplateTransformer;

class NotificationTemplateRepository
{
    public function getNotificationContext($key)
    {
        $template =  NotificationTemplate::where('key',$key)->first();
        return new Item($template , new NotificationTemplateTransformer());
    }
}
