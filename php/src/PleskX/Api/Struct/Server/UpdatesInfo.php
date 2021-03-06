<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.

namespace PleskX\Api\Struct\Server;

class UpdatesInfo extends \PleskX\Api\Struct
{
    /** @var string */
    public $lastInstalledUpdate;

    /** @var boolean */
    public $installUpdatesAutomatically;

    public function __construct($apiResponse)
    {
        $this->_initScalarProperties($apiResponse, [
            'last_installed_update',
            'install_updates_automatically',
        ]);
    }
}