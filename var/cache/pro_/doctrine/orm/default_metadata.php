<?php

// This file has been auto-generated by the Symfony Cache Component.

return [[

'App__Entity__Category__CLASSMETADATA__' => 0,
'App__Entity__Image__CLASSMETADATA__' => 1,
'App__Entity__Property__CLASSMETADATA__' => 2,
'App__Entity__User__CLASSMETADATA__' => 3,

], [

0 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Category',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Category',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\CategoryRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'name' => [
                            'fieldName' => 'name',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'name',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'name' => 'name',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'name' => 'name',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'category',
                    ],
                ],
                'associationMappings' => [
                    [
                        'properties' => [
                            'fieldName' => 'properties',
                            'mappedBy' => 'category',
                            'targetEntity' => 'App\\Entity\\Property',
                            'cascade' => [],
                            'orphanRemoval' => false,
                            'fetch' => 2,
                            'type' => 4,
                            'inversedBy' => null,
                            'isOwningSide' => false,
                            'sourceEntity' => 'App\\Entity\\Category',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                        ],
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},
1 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Image',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Image',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\ImageRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'name' => [
                            'fieldName' => 'name',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'name',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'name' => 'name',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'name' => 'name',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'image',
                    ],
                ],
                'associationMappings' => [
                    [
                        'property' => [
                            'fieldName' => 'property',
                            'joinColumns' => [
                                [
                                    'name' => 'property_id',
                                    'referencedColumnName' => 'id',
                                ],
                            ],
                            'cascade' => [],
                            'inversedBy' => 'image',
                            'targetEntity' => 'App\\Entity\\Property',
                            'fetch' => 2,
                            'type' => 2,
                            'mappedBy' => null,
                            'isOwningSide' => true,
                            'sourceEntity' => 'App\\Entity\\Image',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                            'sourceToTargetKeyColumns' => [
                                'property_id' => 'id',
                            ],
                            'joinColumnFieldNames' => [
                                'property_id' => 'property_id',
                            ],
                            'targetToSourceKeyColumns' => [
                                'id' => 'property_id',
                            ],
                            'orphanRemoval' => false,
                        ],
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},
2 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Property',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Property',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\PropertyRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'name' => [
                            'fieldName' => 'name',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'name',
                        ],
                        'sells' => [
                            'fieldName' => 'sells',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'sells',
                        ],
                        'area' => [
                            'fieldName' => 'area',
                            'type' => 'float',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'area',
                        ],
                        'price' => [
                            'fieldName' => 'price',
                            'type' => 'float',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'price',
                        ],
                        'room_number' => [
                            'fieldName' => 'room_number',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'room_number',
                        ],
                        'details' => [
                            'fieldName' => 'details',
                            'type' => 'text',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'details',
                        ],
                        'file' => [
                            'fieldName' => 'file',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'file',
                        ],
                        'slug' => [
                            'fieldName' => 'slug',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'slug',
                        ],
                        'city' => [
                            'fieldName' => 'city',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'city',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'name' => 'name',
                        'sells' => 'sells',
                        'area' => 'area',
                        'price' => 'price',
                        'room_number' => 'room_number',
                        'details' => 'details',
                        'file' => 'file',
                        'slug' => 'slug',
                        'city' => 'city',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'name' => 'name',
                        'sells' => 'sells',
                        'area' => 'area',
                        'price' => 'price',
                        'room_number' => 'room_number',
                        'details' => 'details',
                        'file' => 'file',
                        'slug' => 'slug',
                        'city' => 'city',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'property',
                    ],
                ],
                'associationMappings' => [
                    [
                        'category' => [
                            'fieldName' => 'category',
                            'joinColumns' => [
                                [
                                    'name' => 'category_id',
                                    'unique' => false,
                                    'nullable' => false,
                                    'onDelete' => null,
                                    'columnDefinition' => null,
                                    'referencedColumnName' => 'id',
                                ],
                            ],
                            'cascade' => [],
                            'inversedBy' => 'properties',
                            'targetEntity' => 'App\\Entity\\Category',
                            'fetch' => 2,
                            'type' => 2,
                            'mappedBy' => null,
                            'isOwningSide' => true,
                            'sourceEntity' => 'App\\Entity\\Property',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                            'sourceToTargetKeyColumns' => [
                                'category_id' => 'id',
                            ],
                            'joinColumnFieldNames' => [
                                'category_id' => 'category_id',
                            ],
                            'targetToSourceKeyColumns' => [
                                'id' => 'category_id',
                            ],
                            'orphanRemoval' => false,
                        ],
                        'image' => [
                            'fieldName' => 'image',
                            'mappedBy' => 'property',
                            'targetEntity' => 'App\\Entity\\Image',
                            'cascade' => [
                                'persist',
                            ],
                            'orphanRemoval' => false,
                            'fetch' => 2,
                            'type' => 4,
                            'inversedBy' => null,
                            'isOwningSide' => false,
                            'sourceEntity' => 'App\\Entity\\Property',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => true,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                        ],
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},
3 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\User',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\User',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\UserRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'email' => [
                            'fieldName' => 'email',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 180,
                            'unique' => true,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'email',
                        ],
                        'roles' => [
                            'fieldName' => 'roles',
                            'type' => 'json',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'roles',
                        ],
                        'password' => [
                            'fieldName' => 'password',
                            'type' => 'string',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'password',
                        ],
                        'surname' => [
                            'fieldName' => 'surname',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'surname',
                        ],
                        'name' => [
                            'fieldName' => 'name',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'name',
                        ],
                        'birthDate' => [
                            'fieldName' => 'birthDate',
                            'type' => 'datetime',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'birth_date',
                        ],
                        'phone' => [
                            'fieldName' => 'phone',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'phone',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'email' => 'email',
                        'roles' => 'roles',
                        'password' => 'password',
                        'surname' => 'surname',
                        'name' => 'name',
                        'birth_date' => 'birthDate',
                        'phone' => 'phone',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'email' => 'email',
                        'roles' => 'roles',
                        'password' => 'password',
                        'surname' => 'surname',
                        'name' => 'name',
                        'birthDate' => 'birth_date',
                        'phone' => 'phone',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'user',
                        'quoted' => true,
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},

]];
