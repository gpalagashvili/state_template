<?php
/**
 * Extension declaration file
 * 
 * Provides information about the extension to the extension manager. 
 */
$EM_CONF[$_EXTKEY] = [
  'title' => 'State Template',
  'description' => 'Typo3 Website Template',
  'category' => 'templates',
  'state' => 'stable',
  'clearCacheOnLoad' => 0,
  'author' => 'Georgiy Palagashvili',
  'author_email' => 'mail@palaga.net',
  'author_company' => '',
  'version' => '1.0.0',
  'constraints' => [
    'depends' => [
      'typo3' => '10.4.32-11.99.99',
    ],
    'conflicts' => [],
    'suggests' => [],
  ],
];
