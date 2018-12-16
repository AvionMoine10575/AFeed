<?php
namespace Feed;
use pocketmine\plugin\PluginBase;
use pocketmine\{Server, Player};
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as TX;
use Feed\Commands\Feedcommand;
class Main extends PluginBase implements Listener{
	public static $logger = null;
	public function onLoad(){
		self::$logger = $this->getLogger();
		self::$logger->info("AvionMoine10575");
		self::$logger->info(TX::RED."Thank you to use my plugin!");
		$this->getServer()->getCommandMap()->register("feed", new Feedcommand("feed"));
}
	public function onEnable(){
$this->getLogger()->info(TX::BLUE."AFeed has been enabled!");		
	}
	public function onDisable(){
$this->getLogger()->info(TX::BLUE."AFeed has been disabled!");	
	}
}
?>