<?php

namespace HiroTeam\NetheriteArmor;

use pocketmine\item\Armor;

class NetheriteHelmet extends Armor
{
    public function __construct(int $meta = 0)
    {
        parent ::__construct(748, $meta, "Netherite Helm");
    }

    public function getDefensePoints(): int
    {
        return 3;
    }

    public function getMaxDurability(): int
    {
        return 407;
    }
}
