<?php

require_once 'vendor/autoload.php';

$misc = new FacebookMessengerMiscellaneous\Miscellaneous();

$foo = $misc
  ->userProfileApi
  ->setAccessToken('EAACYLWYYIZBABAPOfv4peVFIB79z5SNJ9seVjsGvFWQJRMDRgageOM0aw35qZBgdi6KZBQARPj6qBkkbwJWeZCqYvepa8Iz66atD4aevcwL3holWZB3zdxjzRqxIflWmWC2lcYmAfL1gkpL6ZAzsZCAXegEwqiAA27UVUuCSXLiDgZDZD')
  ->setUid(105090)
  ->send();

var_dump($foo);
