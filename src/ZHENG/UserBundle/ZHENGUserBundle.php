<?php

namespace ZHENG\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ZHENGUserBundle extends Bundle
{
    public function getParent()
    {
        return "FOSUserBundle";
    }
}
