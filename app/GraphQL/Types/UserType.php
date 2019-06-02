<?php

namespace App\GraphQL\Types;

use GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;
use GraphQL\Type\Definition\Type;
use App\Models\User;

class UserType extends GraphQLType {

  protected $attributes = [
    'name'        => 'User',
    'description' => 'A User',
    'model'       => User::class
  ];

  /*
  type User {
  id
  name
  email
  photo
  lastLoggedIn
  verified
  deleted
}
 */
  public function fields()
  {
    return [
      'id' => [
        'type' => Type::nonNull(Type::int()),
        'description' => 'ID of the user'
      ],
      'name' => [
        'type' => Type::nonNull(Type::string()),
        'description' => 'Name of the user'
      ],
      'email' => [
        'type' => Type::string(),
        'description' => 'Email of the user',
        'selectable' => false
      ],
      'avatar' => [
        'type' => Type::string(),
        'description' => 'Avatar (photo) of the user',
        'alias' => 'photo'
      ],
      'lastLoggedIn' => [
        'type' => Type::string(),
        'description' => 'Datetime of when user last logged in',
        'alias' => 'logged_in_at'
      ],
      'verified' => [
        'type' => Type::nonNull(Type::boolean()),
        'description' => 'Flag to indicate if the user has verified their email',
        'selectable' => false
      ],
      'deleted' => [
        'type' => Type::nonNull(Type::boolean()),
        'description' => 'Flag to indicate if thr user account is deleted',
        'selectable' => false
      ]
    ];
  }

  protected function resolveEmailField($root, $args)
  {
    return strtolower($root->email);
  }

  protected function resolveVerifiedField($root, $args)
  {
    return isset($root->email_verified_at);
  }

  protected function resolveDeletedField($root, $args)
  {
    return isset($root->deleted_at);
  }

}