<?php

namespace App\Validation;

class UserRules
{
    // public function custom_rule(): bool
    // {
    //     return true;
    // }

    public function validateUser(string $str, string $fields, array $data): bool
    {
        $model = model('UserModel');
        $user = $model->where('email', $data['email'])
            ->first();

        if (!$user) {
            return false;
        }

        return password_verify($data['password'], $user['password']);
    }
}
