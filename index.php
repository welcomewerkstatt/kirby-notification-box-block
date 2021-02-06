<?php

Kirby::plugin('welcome-werkstatt/kirby-notification-box-block', [
  'blueprints' => [
    'blocks/notification-box' => __DIR__ . '/blueprints/blocks/notification-box.yml'
  ],
  'snippets' => [
    'blocks/notification-box' => __DIR__ . '/snippets/blocks/notification-box.php'
  ]
]);