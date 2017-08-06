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

class Like extends Foundation\ActorOut\Subscribe {

    
    use PersistentTrait;
    

    const HEAD_LABEL = "like";
    const HEAD_LABELS = "likes";
    const TAIL_LABEL = "liker";
    const TAIL_LABELS = "likers";
    

    const SETTABLES_EXTRA = [\PhoNetworksAutogenerated\Tweet::class];
    


}

/* Predicate to load as a partial */
class LikePredicate extends Foundation\ActorOut\SubscribePredicate
{
    protected $binding = false;
    protected $multiplicable = false;
    
    const T_CONSUMER = true;
    const T_NOTIFIER = false;
    const T_SUBSCRIBER = false;
    const T_FORMATIVE = false;
    const T_PERSISTENT = true;
}
/* Notification to load if it's a subtype of write or mention. */

}

/*****************************************************
 * Timestamp: 
 * Size (in bytes): 1279
 * Compilation Time: 46191
 * d8626976d2f5dd3a9b1a104046bae1d6
 ******************************************************/