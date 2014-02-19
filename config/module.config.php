<?php
/**
 * @link http://dragonjsonserver.de/
 * @copyright Copyright (c) 2012-2014 DragonProjects (http://dragonprojects.de/)
 * @license http://license.dragonprojects.de/dragonjsonserver.txt New BSD License
 * @author Christoph Herrmann <developer@dragonprojects.de>
 * @package DragonJsonServerGameround
 */

/**
 * @return array
 */
return [
	'dragonjsonservergameround' => [
		'languages' => [],
	],
	'dragonjsonserverdevice' => [
		'deviceplatforms' => [
			'bot' => ['bot_id'],
		],
	],
	'dragonjsonserver' => [
	    'apiclasses' => [
	        '\DragonJsonServerGameround\Api\Gameround' => 'Gameround',
	    ],
    ],
	'service_manager' => [
		'invokables' => [
            '\DragonJsonServerGameround\Service\Gameround' => '\DragonJsonServerGameround\Service\Gameround',
		],
	],
	'doctrine' => [
		'driver' => [
			'DragonJsonServerGameround_driver' => [
				'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
				'cache' => 'array',
				'paths' => [
					__DIR__ . '/../src/DragonJsonServerGameround/Entity'
				],
			],
			'orm_default' => [
				'drivers' => [
					'DragonJsonServerGameround\Entity' => 'DragonJsonServerGameround_driver'
				],
			],
		],
	],
];
