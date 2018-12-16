<?php
namespace AFeed\Commands;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\utils\TextFormat as TX;
class FeedCommand extends Command {
	private $prefix = "[AFeed] ";
public function __construct(string $name){
		parent::__construct(
			$name,
			"Give you full food!",
			"/feed",
			[]
		);
	}
  public function execute(CommandSender $sender, $command, array $args){
		$usages = "/feed";
		if(!$sender->isGuest()){
    return $sender->sendMessage(TX::RED.$this->prefix."Error: ".TX::RESET."You don't have the permission to use the command!");
    }
    if(!$sender instanceof Player){
    return $sender->sendMessage(TX::RED.$this->prefix."You are not a player, you can't feed yourself!");
    }
    $maxfood = $sender->getMaxFood();
    $sender->setFood($maxfood);
    $sender->sendMessage("You have been feeded!");
    return true;
   }
   }