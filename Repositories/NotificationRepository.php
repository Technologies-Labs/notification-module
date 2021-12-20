<?php

namespace Modules\Notification\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use League\Fractal\Resource\Item;
use Modules\Notification\Entities\Notification;
use Modules\Notification\Entities\NotificationTemplate;
use Modules\Notification\Enums\NotificationTypeEnum;
use Modules\Notification\Transformers\NotificationTemplateTransformer;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class NotificationRepository
{
    public function getUserNotifications($user , $type , $paginate = 10)
    {
        $notifications = [];

        if($type == NotificationTypeEnum::USER){
            $notifications = $user->notifications()->paginate($paginate,['*'],null);
        }else{
            $notifications = Notification::where('type', $type)->paginate($paginate,['*'],null);
        }
        return $notifications;
    }
}
