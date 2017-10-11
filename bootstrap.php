<?php

use Maslosoft\Addendum\Addendum;
use Maslosoft\EmbeDi\Adapters\ArrayAdapter;
use Maslosoft\EmbeDi\EmbeDi;
use Maslosoft\Mangan\Mangan;

require __DIR__ . '/vendor/autoload.php';



// Use EmbeDi to configure Mangan
$config = [
	'addendum' => [
		'class' => Addendum::class,
		'checkMTime' => true
	],
	'mongodb' => [
		'class' => Mangan::class,
		// Database name
		'dbName' => 'related',
	]
];
EmbeDi::fly()->addAdapter(new ArrayAdapter($config));
