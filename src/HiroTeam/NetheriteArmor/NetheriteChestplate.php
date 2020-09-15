<?php

namespace HiroTeam\NetheriteArmor;

use pocketmine\item\Armor;

class NetheriteChestplate extends Armor
{
    public function __construct(int $meta = 0)
    {
        parent ::__construct(749, $meta, "Netherite Chestplatte");
    }

    public function getDefensePoints(): int
    {
        return 8;
    }

    public function getMaxDurability(): int
    {
        return 592;
    }
}
