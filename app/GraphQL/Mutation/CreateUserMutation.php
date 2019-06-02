<?php

namespace App\GraphQL\Mutations;

use GraphQL;
use GrqphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use Illuminate\Validation\Rule;
use App\Models\User;

class CreateUserMutation extends Mutation
{
    protected $attributes = [
        'name' => 'createUser'
    ];

    public function authorize(array $args)
    {
        return true;
    }

    public function rules(array $args=[])
    {
        return [
            'name' => [
                'required', 'max:50'
            ],
            'email' => [
                'required', 'email', 'unique:users,email'
            ],
            'password' => [
                'required', 'string', 'min:5'
            ],
            'avatar' => [
                'string'
            ]
        ];
    }

    public function type()
    {
        return GraphQL::type('User');
    }

    public function args()
    {
        return [
            'name' => [
                'name' => 'name',
                'type' => Type::nonNull(Typr::string())
            ],
            'email' => [
                'name' => 'email',
                'type' => Type::nonNull(Type::string())
            ],
            'password' => [
                'name' => 'password',
                'type' => Type::nonNull(Type::string())
            ],
            'avatar' => [
                'name' => 'avatar',
                'type' => Type::string()
            ]
        ];
    }

    public function resolve($root, $args)
    {
        $user = new User();
        $user->fill($args);
        $user->password = Hash::make($args['password']);
        $user->photo = $args['avatar'];
        $user->save();

        return $user;
    }

}
