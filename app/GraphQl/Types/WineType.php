<?php
namespace App\GraphQl\Types;

use App\Models\Wine;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class WineType extends GraphQLType
{
    protected $attributes = [
        'name'=>'Wine',
        'description'=>'details about wine',
        'model'=> Wine::class
    ];

    public function fields():array
    {
        return [
            'id'=>[
                'type'=>Type::nonNull(Type::int()),
                'description'=>'id of the wine'
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of the wine',
            ],
            'description' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Short description of the wine',
            ],
            'color' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The color of the wine',
            ],
            'grape_variety' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The grape variety of the wine',
            ],
            'country' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The country of origin of the wine',
            ],
        ];
    }

}
