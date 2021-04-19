<?php

namespace App\Models;

class PokeTest
{
    public static function attack(array $data): array
    {
        if (!self::attackWrongType($data) || !self::attackNegative($data)) {
            return response()->json([], 422);
        }

        return self::carryOutAttack($data);
    }

    public static function attackWrongType(array $data): bool
    {
        if (isset($data['attack']['type']) && isset($data['defense']['type'])) {
            if ($data['attack']['type'] == 'normal' && $data['defense']['type'] == 'flying') {
                return false;
            }
        }

        return true;
    }

    public static function attackNegative(array $data): bool
    {
        if (isset($data['attack']['power'])) {
            if ($data['attack']['power'] < 0) {
                return false;
            }
        }

        return true;
    }

    private static function carryOutAttack(array $data): array
    {
        $defense = $data['defense']['lyfe'] ?? 0;
        $attack  = $data['attack']['power'] ?? 0;

        $data['defense']['lyfe'] = (int) $defense - (int) $attack;
        return $data;
    }
}