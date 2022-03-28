<?php

// This file has been auto-generated by the Symfony Cache Component.

return [[

'App__Entity__Trip__CLASSMETADATA__' => 0,
'App__Entity__TripSearch__CLASSMETADATA__' => 1,
'App__Entity__Contact__CLASSMETADATA__' => 2,
'App__Entity__User__CLASSMETADATA__' => 3,
'Vich__UploaderBundle__Entity__File__CLASSMETADATA__' => 4,

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
                    'App\\Entity\\Trip',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Trip',
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
                            'columnName' => 'id',
                            'id' => true,
                        ],
                        'departure' => [
                            'fieldName' => 'departure',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'departure',
                        ],
                        'destination' => [
                            'fieldName' => 'destination',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'destination',
                        ],
                        'beginDate' => [
                            'fieldName' => 'beginDate',
                            'type' => 'datetime',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'begin_date',
                        ],
                        'endDate' => [
                            'fieldName' => 'endDate',
                            'type' => 'datetime',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'end_date',
                        ],
                        'transportation' => [
                            'fieldName' => 'transportation',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 8,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'transportation',
                        ],
                        'travelCompanionNumber' => [
                            'fieldName' => 'travelCompanionNumber',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'travel_companion_number',
                        ],
                        'description' => [
                            'fieldName' => 'description',
                            'type' => 'text',
                            'scale' => null,
                            'length' => 0,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'description',
                        ],
                        'title' => [
                            'fieldName' => 'title',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'title',
                        ],
                        'imageName' => [
                            'fieldName' => 'imageName',
                            'type' => 'string',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'image_name',
                        ],
                        'imageSize' => [
                            'fieldName' => 'imageSize',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'image_size',
                        ],
                        'updated_at' => [
                            'fieldName' => 'updated_at',
                            'type' => 'datetime',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'updated_at',
                        ],
                        'tripDepartureRegion' => [
                            'fieldName' => 'tripDepartureRegion',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'trip_departure_region',
                        ],
                        'tripDestinationRegion' => [
                            'fieldName' => 'tripDestinationRegion',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'trip_destination_region',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'departure' => 'departure',
                        'destination' => 'destination',
                        'begin_date' => 'beginDate',
                        'end_date' => 'endDate',
                        'transportation' => 'transportation',
                        'travel_companion_number' => 'travelCompanionNumber',
                        'description' => 'description',
                        'title' => 'title',
                        'image_name' => 'imageName',
                        'image_size' => 'imageSize',
                        'updated_at' => 'updated_at',
                        'trip_departure_region' => 'tripDepartureRegion',
                        'trip_destination_region' => 'tripDestinationRegion',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'departure' => 'departure',
                        'destination' => 'destination',
                        'beginDate' => 'begin_date',
                        'endDate' => 'end_date',
                        'transportation' => 'transportation',
                        'travelCompanionNumber' => 'travel_companion_number',
                        'description' => 'description',
                        'title' => 'title',
                        'imageName' => 'image_name',
                        'imageSize' => 'image_size',
                        'updated_at' => 'updated_at',
                        'tripDepartureRegion' => 'trip_departure_region',
                        'tripDestinationRegion' => 'trip_destination_region',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'trip',
                        'indexes' => [
                            'IDX_7656F53B38E3FFB9' => [
                                'columns' => [
                                    'user_trip_owner_id',
                                ],
                            ],
                        ],
                    ],
                ],
                'associationMappings' => [
                    [
                        'userTripOwner' => [
                            'fieldName' => 'userTripOwner',
                            'joinColumns' => [
                                [
                                    'name' => 'user_trip_owner_id',
                                    'unique' => false,
                                    'nullable' => true,
                                    'onDelete' => null,
                                    'columnDefinition' => null,
                                    'referencedColumnName' => 'id',
                                ],
                            ],
                            'cascade' => [],
                            'inversedBy' => null,
                            'targetEntity' => 'App\\Entity\\User',
                            'fetch' => 2,
                            'type' => 2,
                            'mappedBy' => null,
                            'isOwningSide' => true,
                            'sourceEntity' => 'App\\Entity\\Trip',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                            'sourceToTargetKeyColumns' => [
                                'user_trip_owner_id' => 'id',
                            ],
                            'joinColumnFieldNames' => [
                                'user_trip_owner_id' => 'user_trip_owner_id',
                            ],
                            'targetToSourceKeyColumns' => [
                                'id' => 'user_trip_owner_id',
                            ],
                            'orphanRemoval' => false,
                        ],
                        'contact' => [
                            'fieldName' => 'contact',
                            'joinColumns' => [
                                [
                                    'name' => 'contact_id',
                                    'referencedColumnName' => 'id',
                                ],
                            ],
                            'cascade' => [],
                            'inversedBy' => 'trip',
                            'targetEntity' => 'App\\Entity\\Contact',
                            'fetch' => 2,
                            'type' => 2,
                            'mappedBy' => null,
                            'isOwningSide' => true,
                            'sourceEntity' => 'App\\Entity\\Trip',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                            'sourceToTargetKeyColumns' => [
                                'contact_id' => 'id',
                            ],
                            'joinColumnFieldNames' => [
                                'contact_id' => 'contact_id',
                            ],
                            'targetToSourceKeyColumns' => [
                                'id' => 'contact_id',
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
                    'App\\Entity\\TripSearch',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\TripSearch',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\TripSearchRepository',
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
                        'departure' => [
                            'fieldName' => 'departure',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'departure',
                        ],
                        'destination' => [
                            'fieldName' => 'destination',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'destination',
                        ],
                        'travelCompanionNumber' => [
                            'fieldName' => 'travelCompanionNumber',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'travel_companion_number',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'departure' => 'departure',
                        'destination' => 'destination',
                        'travel_companion_number' => 'travelCompanionNumber',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'departure' => 'departure',
                        'destination' => 'destination',
                        'travelCompanionNumber' => 'travel_companion_number',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'trip_search',
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
                    'App\\Entity\\Contact',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Contact',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\ContactRepository',
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
                        'firstname' => [
                            'fieldName' => 'firstname',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'firstname',
                        ],
                        'lastname' => [
                            'fieldName' => 'lastname',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'lastname',
                        ],
                        'phone' => [
                            'fieldName' => 'phone',
                            'type' => 'text',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'phone',
                        ],
                        'email' => [
                            'fieldName' => 'email',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 20,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'email',
                        ],
                        'message' => [
                            'fieldName' => 'message',
                            'type' => 'text',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'message',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'firstname' => 'firstname',
                        'lastname' => 'lastname',
                        'phone' => 'phone',
                        'email' => 'email',
                        'message' => 'message',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'firstname' => 'firstname',
                        'lastname' => 'lastname',
                        'phone' => 'phone',
                        'email' => 'email',
                        'message' => 'message',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'contact',
                    ],
                ],
                'associationMappings' => [
                    [
                        'trip' => [
                            'fieldName' => 'trip',
                            'mappedBy' => 'contact',
                            'targetEntity' => 'App\\Entity\\Trip',
                            'cascade' => [],
                            'orphanRemoval' => false,
                            'fetch' => 2,
                            'type' => 4,
                            'inversedBy' => null,
                            'isOwningSide' => false,
                            'sourceEntity' => 'App\\Entity\\Contact',
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
                            'columnName' => 'id',
                            'id' => true,
                        ],
                        'email' => [
                            'fieldName' => 'email',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 180,
                            'unique' => false,
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
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'roles',
                        ],
                        'password' => [
                            'fieldName' => 'password',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'password',
                        ],
                        'firstname' => [
                            'fieldName' => 'firstname',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'firstname',
                        ],
                        'lastname' => [
                            'fieldName' => 'lastname',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'lastname',
                        ],
                        'sex' => [
                            'fieldName' => 'sex',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 6,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'sex',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'email' => 'email',
                        'roles' => 'roles',
                        'password' => 'password',
                        'firstname' => 'firstname',
                        'lastname' => 'lastname',
                        'sex' => 'sex',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'email' => 'email',
                        'roles' => 'roles',
                        'password' => 'password',
                        'firstname' => 'firstname',
                        'lastname' => 'lastname',
                        'sex' => 'sex',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'user',
                        'uniqueConstraints' => [
                            'UNIQ_8D93D649E7927C74' => [
                                'columns' => [
                                    'email',
                                ],
                            ],
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
4 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\AssignedGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\AssignedGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'Vich\\UploaderBundle\\Entity\\File',
                ],
                'namespace' => [
                    'Vich\\UploaderBundle\\Entity',
                ],
                'rootEntityName' => [
                    'Vich\\UploaderBundle\\Entity\\File',
                ],
                'isEmbeddedClass' => [
                    true,
                ],
                'fieldMappings' => [
                    [
                        'name' => [
                            'fieldName' => 'name',
                            'nullable' => true,
                            'type' => 'string',
                            'columnName' => 'name',
                        ],
                        'originalName' => [
                            'fieldName' => 'originalName',
                            'columnName' => 'original_name',
                            'nullable' => true,
                            'type' => 'string',
                        ],
                        'mimeType' => [
                            'fieldName' => 'mimeType',
                            'columnName' => 'mime_type',
                            'nullable' => true,
                            'type' => 'string',
                        ],
                        'size' => [
                            'fieldName' => 'size',
                            'type' => 'integer',
                            'nullable' => true,
                            'columnName' => 'size',
                        ],
                        'dimensions' => [
                            'fieldName' => 'dimensions',
                            'type' => 'simple_array',
                            'nullable' => true,
                            'columnName' => 'dimensions',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'name' => 'name',
                        'original_name' => 'originalName',
                        'mime_type' => 'mimeType',
                        'size' => 'size',
                        'dimensions' => 'dimensions',
                    ],
                ],
                'columnNames' => [
                    [
                        'name' => 'name',
                        'originalName' => 'original_name',
                        'mimeType' => 'mime_type',
                        'size' => 'size',
                        'dimensions' => 'dimensions',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'file',
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