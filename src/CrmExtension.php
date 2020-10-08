<?php

namespace Javanile\VtigerPsr4;

use CRMEntity as VtigerCrmEntity;

class CrmExtension
{
    public function vtlib_handler($moduleName, $eventType)
    {
        return $this->vtlibHandler($moduleName, $eventType);
    }
}
