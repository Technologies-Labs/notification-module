<?php

namespace Modules\NotificationModule\Notifications;

use App\Actions\Notification\SendBellNotificationAction;
use Modules\NotificationModule\Entities\Notification;
use Modules\NotificationModule\Enums\NotificationTypeEnum;
use Modules\NotificationModule\Repositories\NotificationTemplateRepository;

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
