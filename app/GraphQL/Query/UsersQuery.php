<?php

namespace App\GraphQL\Query;

use GraphQL;
use GrqphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GrahpQL\Support\SelectFields;
use App\User;

class UsersQuery extends Query
{

    protected $attributes = [
        'name' => 'users'
    ];

    public function authorize(array $args = [])
    {
        return true;
    }

    public function type()
    {
        return Type::listOf(GrapghQL::type('Users'));
    }

    public function args()
    {
        return [
            'ids' => [
                'name' => 'ids',
                'type' => Type::listOf(Type::int())
            ]
        ];
    }

    public function rules(array $args = [])
    {
        return [
            'ids' => [
                'array',
            ],
            'ids.*' => [
                'numeric'
            ]
        ];
    }

    public function resolve($root, $args)
    {
        if (isset($args['ids'])) {
            return User::find($args['ids']);
        }

        return User::all();
    }

}
