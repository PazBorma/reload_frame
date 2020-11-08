<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "reload_frame".
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Reload frame',
  'description' => 'Reloads the frame page content',
  'category' => 'be',
  'author' => 'Thomas Ebermann',
  'state' => 'stable',
  'uploadfolder' => false,
  'createDirs' => '',
  'clearCacheOnLoad' => 0,
  'version' => '1.0',
  'constraints' => [
      'depends' => [
          'typo3' => '9.5.0-10.5.0',
      ],
      'conflicts' => [],
      'suggests' => [],
  ],
  'clearcacheonload' => false
);
