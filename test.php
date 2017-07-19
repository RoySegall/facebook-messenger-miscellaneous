<?php

require_once 'vendor/autoload.php';

$misc = new FacebookMessengerMiscellaneous\Miscellaneous();

$persistent_menu = $misc->messengerProfileApi->persistentMenu;
$get_started = $misc->messengerProfileApi->getStarted;

$menu = new \FacebookMessengerMiscellaneous\Miscellaneous\UserMenu\CallToActions();
$nested_1 = $menu
  ->setType('postback')
  ->setTitle('Cat')
  ->setPayload('Cat');

$menu = new \FacebookMessengerMiscellaneous\Miscellaneous\UserMenu\CallToActions();
$nested_2 = $menu
  ->setType('postback')
  ->setTitle('Dog')
  ->setPayload('Dog');

$send = $persistent_menu
  ->addCallToActions(
    $misc->messengerProfileApi->callToActions
      ->setType('nested')
      ->setTitle('Get pictures')
      ->addCallToActions($nested_1)
      ->addCallToActions($nested_2)
  )
  ->addCallToActions(
    $misc->messengerProfileApi->callToActions
      ->setType('postback')
      ->setTitle('Say something nice')
      ->setPayload('say_something_nice')
  )
  ->addCallToActions(
    $misc->messengerProfileApi->callToActions
      ->setType('postback')
      ->setTitle('Toss a coin')
      ->setPayload('toss_a_coin')
  )
  ->setLocale('default');

Kint::dump($send->getData());



$foo = $misc
  ->messengerProfileApi
  ->setAccessToken('EAACYLWYYIZBABAPOfv4peVFIB79z5SNJ9seVjsGvFWQJRMDRgageOM0aw35qZBgdi6KZBQARPj6qBkkbwJWeZCqYvepa8Iz66atD4aevcwL3holWZB3zdxjzRqxIflWmWC2lcYmAfL1gkpL6ZAzsZCAXegEwqiAA27UVUuCSXLiDgZDZD')
  ->send($send);

print_r($foo);
