<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cards = [
            [
                "name" => "Animar Soul of Elements",
                "expansion" => "Commander Master",
                "card_type" => "Legendary Creature",
                "description" => "protection from black and white",
            ],
            [
                "name" => "Mystic Grove",
                "expansion" => "Enchanted Realms",
                "card_type" => "Land",
                "description" => "aps for one green mana. When Mystic Grove enters the battlefield, you may search your library for a Forest card and put it onto the battlefield tapped."
            ],
            [
                "name" => "Flame Serpent",
                "expansion" => "Inferno Awakening",
                "card_type" => "Creature",
                "description" => "A 3/3 Elemental creature with haste. When Flame Serpent attacks, it deals 1 damage to target player or planeswalker."
            ],
            [
                "name" => "Shadowveil Cloak",
                "expansion" => "hadows of the Past",
                "card_type" => "Artifact",
                "description" => " Equipped creature has hexproof and can’t be blocked by creatures with power 2 or less. Equip cost: 2."
            ],
            [
                "name" => "Celestial Beacon",
                "expansion" => "Cosmic Convergence",
                "card_type" => "Enchantment",
                "description" => "Whenever you gain life, you may draw a card. If you do, discard a card."
            ]
        ];

        foreach ($cards as $card) {
            $newCard = new Card();
            $newCard->name = $card["name"];
            $newCard->expansion = $card["expansion"];
            $newCard->card_type = $card["card_type"];
            $newCard->description = $card["description"];
            $newCard->save();
        }
    }
}