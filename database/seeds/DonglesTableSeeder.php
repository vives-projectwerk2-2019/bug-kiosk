<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DonglesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dongles')->insert(
            [
                [
                    'name' => 'Rocketengine',
                    'description' => 'Tank movement: +3',
                    'logo' => 'images/logos/rocketEngine.png',
                    'dongle_hash' => '01a2f560d6df03bb',
                ],
                [
                    'name' => 'Amphibious',
                    'description' => 'Tank can enter water.',
                    'logo' => 'images/logos/amphibious.png',
                    'dongle_hash' => '0140c29c8357f2ce',
                ],
                [
                    'name' => 'Harrier',
                    'description' => 'Tank movement: +6',
                    'logo' => 'images/logos/harrier.png',
                    'dongle_hash' => '0155cf8199f0245b',
                ],
                [
                    'name' => 'Adamantium',
                    'description' => 'Tank armor: +6, movement: -1',
                    'logo' => 'images/logos/adamantium.png',
                    'dongle_hash' => '016bc4464286f3fb',
                ],
                [
                    'name' => 'Gravyshield',
                    'description' => 'Tank armor: +1',
                    'logo' => 'images/logos/gravyshield.png',
                    'dongle_hash' => '0148eef363dff533',
                ],
                [
                    'name' => 'Nanobots',
                    'description' => 'Tank healt: +2',
                    'logo' => 'images/logos/nanobots.png',
                    'dongle_hash' => '0164a54798d7d27a',
                ],
                [
                    'name' => 'StructualStrengthening',
                    'description' => 'Tank healt: +5',
                    'logo' => 'images/logos/structuralStrengthening.png',
                    'dongle_hash' => '0136edcaaf285d1d',
                ],
                [
                    'name' => 'Flammenwerpfer',
                    'description' => 'Wapon: Flammenwerpfer',
                    'logo' => 'images/logos/flammenwerpfer.png',
                    'dongle_hash' => '011d5ba90ce241e6',
                ],
                [
                    'name' => 'Laser',
                    'description' => 'Wapon: Lasergun',
                    'logo' => 'images/logos/laser.png',
                    'dongle_hash' => '01a2eb344edc7c5a',
                ],
                [
                    'name' => 'Mines',
                    'description' => 'Wapon: Mines',
                    'logo' => 'images/logos/mines.png',
                    'dongle_hash' => '01d9643e2bf10134',
                ],
                [
                    'name' => 'Plasmagun',
                    'description' => 'Wapon: Plasmagun',
                    'logo' => 'images/logos/plasmagun.png',
                    'dongle_hash' => '0100548e2b3038f5',
                ],
                [
                    'name' => 'EmpBomb',
                    'description' => 'Wapon: EMP-bomb',
                    'logo' => 'images/logos/empBomb.png',
                    'dongle_hash' => '01ff7ab8c2155e57',
                ],
                [
                    'name' => 'Ram',
                    'description' => 'Wapon: Ram',
                    'logo' => 'images/logos/ram.png',
                    'dongle_hash' => '0122e76e424f7c79',
                ],
                [
                    'name' => 'GatlingGun',
                    'description' => 'Wapon: Gatling gun',
                    'logo' => 'images/logos/gatlingGun.png',
                    'dongle_hash' => '01f94b5e5d4277b5',
                ],
            ]
        );
    }
}
