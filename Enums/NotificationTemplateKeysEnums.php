<?php

namespace Modules\NotificationModule\Enums;

use Modules\NotificationModule\Notifications\PostNotification;
use Modules\NotificationModule\Notifications\ProductNotification;
use Modules\NotificationModule\Notifications\SuggestionNotification;
use \Spatie\Enum\Enum;

class NotificationTemplateKeysEnums
{
    const CREATE_PRODUCT        = "create-product";
    const CREATE_SUGGESTION     = "create-suggestion";
    const CREATE_POST           = "create-post";
    const APPROVED_MEMBER       = "approved-member";
    const DELETE_MEMBER         = "delete-member";
    const CREATE_ANNOUNCEMENT   = "create-announcement";
    const CREATE_OFFER          = "create-offer";


    const KEYS =
    [
        self::CREATE_PRODUCT,
        self::CREATE_SUGGESTION,
        self::CREATE_POST,
    ];
}
