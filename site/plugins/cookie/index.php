<?php

Kirby::plugin('schnti/cookie', [
	'translations' => [
		'en' => [
			'schnti.cookie.text'       => 'We use cookies to improve your experience.',
			'schnti.cookie.linkText'   => 'More info',
			'schnti.cookie.buttonText' => 'Accept',
		],
		'de' => [
			'schnti.cookie.text'       => 'Diese Website benutzt Cookies, um seinen Lesern das beste Webseiten-Erlebnis zu ermöglichen.',
			'schnti.cookie.linkText'   => 'Mehr Infos',
			'schnti.cookie.buttonText' => 'Ich habe verstanden',
		]
	],
	'snippets'     => [
		'cookie' => __DIR__ . '/snippets/cookie.php'
	]
]);