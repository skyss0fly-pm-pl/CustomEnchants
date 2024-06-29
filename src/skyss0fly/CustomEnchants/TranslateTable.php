<?php
namespace CustomEnchants\TranslateTable;
use pocketmine\utils\TextFormat as TF;
final class TranslateTable {
  public const $prefix = TF::YELLOW . "[" . TF::GREEN . "CustomEnchants"   TF::YELLOW . "]";
  // Errors:
public const ERR_INVALID_ITEM = $prefix . TF::RED . " [ERROR] Invalid Item";
  public const ERR_HIGH_LEVEL = $prefix . TF::RED . " [ERROR] Enchant Level too High";
  public const ERR_LOW_LEVEL = $prefix . TF::RED . " [ERROR] Enchant Level too Low";
  public const ERR_NOPERM = $prefix . TF::RED . " [ERROR] You don't have permission to use this command";
public const ERR_INVALID_PARAM = $prefix . TF::RED . " [ERROR] Invalid Parameters";
  

// Other:
public const ENCHANT_SUCCESS = $prefix . TF::GREEN . "[SUCCESS] Enchanted Item";  


  

}
