<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\PokeTest;

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
        $response = PokeTest::attack($data);
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
        $response = PokeTest::attackWrongType($data);
        $this->assertEquals(false, $response);
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
        $response = PokeTest::attackNegative($data);
        $this->assertEquals(false, $response);
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
        $response = PokeTest::attack($data);
        $this->assertEquals('80', $response['defense']['lyfe']);
    }
}


