<?php

namespace Modules\Notification\Http\Livewire;

use Livewire\Component;
use Modules\Notification\Enums\NotificationTypeEnum;
use Modules\Notification\Repositories\NotificationRepository;

class UserNotifications extends Component
{
    private $notificationRepository;
    public $user;
    public $page;

    public  $perPage = 5;

    public function getNotificationsProperty()
    {
        return $this->notificationRepository
        ->getUserNotifications($this->user , NotificationTypeEnum::USER , $this->perPage);
    }

    public function loadMore()
    {
        $this->perPage += 3;
    }

    public function boot()
    {
        $this->notificationRepository = new NotificationRepository();
    }

    public function render()
    {
        return view('notification::livewire.'.$this->page,[
            'notifications'  =>$this->notifications
        ]);
    }

    public function readNotification($id)
    {
        $notification = $this->notifications->find($id);
        if (!$notification) {
            return;
        }
        $notification->is_read = 1;
        $this->emit('deleteItem', "#notification-" . $notification->id);
        $notification->save();
    }
}
