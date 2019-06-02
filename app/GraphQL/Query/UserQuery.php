<?php

namespace App\GraphQL\Query;

use GraphQL;
use GrqphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GrahpQL\Support\SelectFields;
use App\User;

class UserQuery extends Query
{

    protected $attributes = [
        'name' => 'user'
    ];

    public function authorize(array $args=[])
    {
        return true;
    }

    public function type()
    {
        return GraphQL::type('User');
    }

    public function rules(array $args=[])
    {
        return [
            'id' => [
                'required',
                'numeric',
                'min:1',
                'exists:users,id'
            ]
        ];
    }

    public function args()
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int()
            ]
        ];
    }

    public function resolve($root, $args, SelectFields $fields)
    {
        return User::findOrFail($args['id']);
    }

}
