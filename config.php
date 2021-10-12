<?php

require_once 'vendor/autoload.php';

if (!session_id())
{
    session_start();
}

// Call Facebook API

$facebook = new \Facebook\Facebook([
  'app_id'      => '400121251829649',
  'app_secret'     => '7dcfa9f02454fe2f933aa47d4d2cc458',
  'default_graph_version'  => 'v2.10'
]);

?>