<?php

namespace Modules\Notification\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class NotificationScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $builder->where('is_read', 0);
    }
}
