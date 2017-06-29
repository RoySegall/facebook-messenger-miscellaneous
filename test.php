<?php

require_once 'vendor/autoload.php';

$misc = new FacebookMessengerMiscellaneous\Miscellaneous();

$misc
  ->setAccessToken('a')
  ->send($misc->userProfileApi);
