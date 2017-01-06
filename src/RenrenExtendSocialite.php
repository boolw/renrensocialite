<?php

namespace Boolw\RenrenSocialite;

use SocialiteProviders\Manager\SocialiteWasCalled;

class RenrenExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('renren', __NAMESPACE__.'\Provider');
    }
}
