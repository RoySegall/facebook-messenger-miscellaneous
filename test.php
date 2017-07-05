<?php

require_once 'vendor/autoload.php';

$misc = new FacebookMessengerMiscellaneous\Miscellaneous();

$persistent_menu = $misc->messengerProfileApi->persistentMenu;

$foo = $misc
  ->messengerProfileApi
  ->setAccessToken('EAACYLWYYIZBABAPOfv4peVFIB79z5SNJ9seVjsGvFWQJRMDRgageOM0aw35qZBgdi6KZBQARPj6qBkkbwJWeZCqYvepa8Iz66atD4aevcwL3holWZB3zdxjzRqxIflWmWC2lcYmAfL1gkpL6ZAzsZCAXegEwqiAA27UVUuCSXLiDgZDZD')
  ->send($persistent_menu
    ->addCallToActions(
      $misc->messengerProfileApi->callToActions
        ->setTitle('a')
        ->setPayload('a')
    ));

print_r($foo);
