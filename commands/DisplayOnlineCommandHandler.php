<?php

namespace App\Commands;

require_once 'BaseCommandHandler.php';

final class DisplayOnlineCommandHandler extends BaseCommandHandler implements ShowPulseCommandHandlerInterface{ 
    public function execute() { 
        $loadSuccessful = $this->loadConfiguration();  

        if (!$loadSuccessful) { 
            return false;
        }

        $this->httpRequest(
            false, 
            "displays/online/" . $this->getShowUuid(),
            'PUT',
            null   
        );
    }
}