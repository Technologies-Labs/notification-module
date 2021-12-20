<?php

namespace Modules\Notification\Entities;

use App\Models\User;
use App\Scopes\OrderingScope;
use Database\Factories\NotificationsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Modules\Notification\Scopes\NotificationScope;

class Notification extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected static function booted()
    {
        static::addGlobalScope(new OrderingScope);
        static::addGlobalScope(new NotificationScope);
    }

    protected static function newFactory()
    {
        return NotificationsFactory::new();
    }

}
