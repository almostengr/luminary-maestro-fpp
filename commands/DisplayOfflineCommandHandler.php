<?php

namespace App\Commands;

require_once 'BaseCommandHandler.php';

final class DisplayOfflineCommandHandler extends BaseCommandHandler implements ShowPulseCommandHandlerInterface{ 
    public function execute() { 
        $loadSuccessful = $this->loadConfiguration();  

        if (!$loadSuccessful) { 
            return false;
        }

        $this->httpRequest(
            false, 
            "displays/offline/" . $this->getShowUuid(),
            'PUT',
            null   
        );
    }
}