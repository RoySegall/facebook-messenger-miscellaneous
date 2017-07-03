<?php

require_once 'vendor/autoload.php';

$misc = new FacebookMessengerMiscellaneous\Miscellaneous();

$misc
  ->userProfileApi
  ->setAccessToken('asdas')
  ->send();
