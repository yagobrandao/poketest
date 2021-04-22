<?php

namespace App\Service;

/**
 * [Description PokeTest]
 */
class PokeTestService
{
    public static function attack(array $data)
    {
        if (!self::attackWrongType($data) || !self::attackNegative($data)) {
            return null;
        }

        return self::carryOutAttack($data);
    }

    /**
     * @param array $data
     * 
     * @return bool
     */
    public static function attackWrongType(array $data): bool
    {
        if (isset($data['attack']['type']) && isset($data['defense']['type'])) {
            if ($data['attack']['type'] == 'normal' && $data['defense']['type'] == 'flying') {
                return false;
            }
        }

        return true;
    }

    /**
     * @param array $data
     * 
     * @return bool
     */
    public static function attackNegative(array $data): bool
    {
        if (isset($data['attack']['power'])) {
            if ($data['attack']['power'] < 0) {
                return false;
            }
        }

        return true;
    }

    /**
     * @param array $data
     * 
     * @return array
     */
    private static function carryOutAttack(array $data): array
    {
        $defense = $data['defense']['lyfe'] ?? 0;
        $attack  = $data['attack']['power'] ?? 0;

        $data['defense']['lyfe'] = (int) $defense - (int) $attack;
        return $data;
    }
}
