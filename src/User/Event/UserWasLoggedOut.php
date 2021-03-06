<?php namespace Anomaly\Streams\Addon\Module\Users\User\Event;

use Anomaly\Streams\Addon\Module\Users\User\Contract\UserInterface;

class UserWasLoggedOut
{

    protected $user;

    function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }
}
 