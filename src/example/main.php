<?php

namespace main;//此處要跟檔名一樣

use pocketmine\plugin\PluginBase;
use pocketmine\plugin\Plugin;

class main extends PluginBase {

    public function onEnable()//開啟插件{
    	$this->getserver()->getPluginManager()->registerEvents($this,$this);
	      $this->getLogger()->info(TEXTFORMAT::GOLD . "§cTSR.TW§e星童插件組 §6ExamplePlugin加載中");
    }
    public function onDisable(){
      $this->getLogger()->info(TEXTFORMAT::RED . "GrapplingHook 飛天鉤卸載");
    }
    
}
