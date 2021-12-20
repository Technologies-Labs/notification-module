<?php

namespace Modules\Notification\Notifications;

use App\Actions\Notification\SendBellNotificationAction;
use Modules\Notification\Entities\Notification;
use Modules\Notification\Enums\NotificationTypeEnum;
use Modules\Notification\Repositories\NotificationTemplateRepository;

abstract class NotificationAbstract
{
    private $templateRepository;

    public $template;
    public $withSMS = false;

    public function __construct()
    {
        $this->templateRepository = new NotificationTemplateRepository();
    }

    public function setTemplate($key)
    {
        $this->template   = $this->templateRepository->getNotificationContext($key)->getData();
        return $this;
    }

    public function setWithSMS($withSMS)
    {
        $this->withSMS = $withSMS;
        return $this;
    }


    public abstract function handle();
}
