<?php

namespace App\GraphQL\Mutations;

use GraphQL;
use GrqphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use Illuminate\Validation\Rule;
use App\Models\User;

class DeleteUserMutation extends User
{

    protected $attributes = [
        'name' => 'deleteUser'
    ];

    public function authorize(array $args=[])
    {
        return true;
    }

    public function type()
    {
        return Type::boolean();
    }

    public function rules(array $args=[])
    {
        return [
            'id' => [
                'required', 'numeric', 'min:1', 'exists:users,id'
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

    public function resolve($root, $args)
    {
        $user = User::findOrFail($args['id']);

        return $user->delete() ? true : false;
    }

}
