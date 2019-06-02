<?php

namespace App\GraphQL\Mutations;

use GraphQL;
use GrqphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use Illuminate\Validation\Rule;
use App\Models\User;

class UpdateUserMutation extends User
{

    protected $attributes = [
        'name' => 'updateUser'
    ];

    public function authorize(array $args=[])
    {
        return true;
    }

    public function rules(array $args=[])
    {
        return [
            'id' => [
                'required', 'numeric', 'min:1', 'exists:users,id'
            ],
            'name' => [
                'required', 'max:50'
            ],
            'email' => [
                'required', 'email', 'unique:users,email,'.$args['id'],
            ],
            'password' => [
                'sometimes', 'string', 'min:5'
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
            'id' => [
                'name' => 'id',
                'type' =>  Type::nonNull(Type::int()),
            ],
            'name' => [
                'name' => 'name',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'email' => [
                'name' => 'email',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'password' => [
                'name' => 'password',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'avatar' => [
                'name' => 'avatar',
                'type' => Type::string()
            ]
        ];
    }

    public function resolve($root, $args)
    {
        $user = User::findOrFail($args['id']);
        $user->fill($args);
        $user->password = Hash::make($args['password']);
        $user->photo = $args['avatar'];
        $user->save();

        return $user;
    }

}
