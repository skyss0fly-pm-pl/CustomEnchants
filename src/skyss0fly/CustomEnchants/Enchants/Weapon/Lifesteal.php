<?php

namespace CustomEnchants\Lifesteal;

use pocketmine\Player;
use pocketmine\item\VanillaItems;

final class Lifesteal {

public function MaxLevel() : bool {
  return 5;
}

public function MinLevel() : bool {
return 1;
}

public function isWeapon(Player $player) : bool {
$item = $player->GetItemInHand();
  if ($item === [VanillaItems::WOODEN_SWORD , VanillaItems::STONE_SWORD , VanillaItems::IRON_SWORD , VanillaItems::DIAMOND_SWORD, VanillaItems::NETHERITE_SWORD]) {
    return true;
  }
  else {
return false;
  }
      }
  
}
