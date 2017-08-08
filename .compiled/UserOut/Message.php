<?php

namespace PhoNetworksAutogenerated\UserOut 
{

use Pho\Kernel\Traits\Edge\PersistentTrait;
use Pho\Framework;
use Pho\Kernel\Foundation;



/*****************************************************
 * This file was auto-generated by pho-compiler
 * For more information, visit http://phonetworks.org
 ******************************************************/

class Message extends Foundation\ObjectOut\Mention {

    
    use PersistentTrait;
    

    const HEAD_LABEL = "outgoingmessage";
    const HEAD_LABELS = "outgoingmessages";
    const TAIL_LABEL = "incomingmessage";
    const TAIL_LABELS = "incomingmessages";
    

    const SETTABLES_EXTRA = [\PhoNetworksAutogenerated\User::class];
    

    const FIELDS = "{\"content\":{\"constraints\":{\"minLength\":null,\"maxLength\":\"255\",\"uuid\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null},\"directives\":{\"md5\":false,\"now\":false,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\"}},\"sent_time\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"uuid\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null},\"directives\":{\"md5\":false,\"now\":true,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\"}}}";

}

/* Predicate to load as a partial */
class MessagePredicate extends Foundation\ObjectOut\MentionPredicate
{
    protected $binding = false;
    protected $multiplicable = true;
    
    const T_CONSUMER = false;
    const T_NOTIFIER = false;
    const T_SUBSCRIBER = false;
    const T_FORMATIVE = false;
    const T_PERSISTENT = true;
}
/* Notification to load if it's a subtype of write or mention. */
class MessageNotification extends Foundation\ObjectOut\MentionNotification
{

}
}

/*****************************************************
 * Timestamp: 
 * Size (in bytes): 1882
 * Compilation Time: 46192
 * 215ec4122639001cb286bb677c8dd377
 ******************************************************/
