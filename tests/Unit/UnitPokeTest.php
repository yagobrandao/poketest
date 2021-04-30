<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Service\PokeTestService;

class UnitPokeTest extends TestCase
{
    public function testAttack()
    {
        $data = [
            'attack' => [
                "type" => "flying",
                "lyfe" => "100",
                "power" => "20"
            ],
            'defense' => [
                "type" => "normal",
                "lyfe" => "100",
            ]
        ];
        $response = PokeTestService::attack($data);
        $this->assertEquals('80', $response['defense']['lyfe']);
    }

    public function testAttackWrongType()
    {
        $data = [
            'attack' => [
                "type" => "normal",
                "lyfe" => "100",
                "power" => "20"
            ],
            'defense' => [
                "type" => "flying",
                "lyfe" => "100",
            ]
        ];
        $response = PokeTestService::attackWrongType($data);
        $this->assertEquals(true, $response);
    }

    public function testattackNegative()
    {
        $data = [
            'attack' => [
                "type" => "normal",
                "lyfe" => "100",
                "power" => "-20"
            ],
            'defense' => [
                "type" => "flying",
                "lyfe" => "100",
            ]
        ];
        $response = PokeTestService::attackNegative($data);
        $this->assertEquals(true, $response);
    }

    public function testCarryOutAttack()
    {
        $data = [
            'attack' => [
                "type" => "flying",
                "lyfe" => "100",
                "power" => "20"
            ],
            'defense' => [
                "type" => "normal",
                "lyfe" => "100",
            ]
        ];
        $response = PokeTestService::attack($data);
        $this->assertEquals('80', $response['defense']['lyfe']);
    }
}


