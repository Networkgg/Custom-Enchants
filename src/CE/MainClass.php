<?php
namespace CE;

use pocketmine\Server
use pocketmine\plugin\PluginBase

class: 
  
      public function onEnable(){
        $this->getLogger()->info("CE is now Enabled!");
    }

    public function onDisable(){
        $this->getLogger()->info("CE is now Disabled!");
    }
}

