<?php
namespace App\Bussines;

use App\Models\User;

class AbilitiesResolver{

    public static function resolve(User $user, $device): array{
        if($user->role == 'client'){
            return static::resolveForClient($device);
        }
    }

    public static function resolveForClient($device): array{
        return match ($device){
            'watch' => [
                'establishment:show'
            ],
            default => [
                'establishment:show',
                'orders:create'
            ]
        };
    }
}
