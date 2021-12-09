<?php

namespace Modules\NotificationModule\Transformers;

use League\Fractal\TransformerAbstract;
use Modules\NotificationModule\Entities\NotificationTemplate;

class NotificationTemplateTransformer extends TransformerAbstract
{

    public function transform(NotificationTemplate $template)
	{
	    return [
	        'key'       => $template->key,
	        'title'     => $template->title,
	        'content'   => $template->content,
	    ];
	}
}
