<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */

//$j = json_decode(getenv('VCAP_SERVICES'));
//$mongo = $j->{'mongodb-1.8'}[0]->{'credentials'};

return array(
	'active' => 'mongo',
	'mongo' => array(
		'default' => array(
			'hostname' => 'localhost',
			'database' => 'local',
		),
	),
);