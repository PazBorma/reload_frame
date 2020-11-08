<?php

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['Backend\Template\Components\ButtonBar']['getButtonsHook'][] = 'PazBorma\ReloadFrame\Hooks\ReloadFrameHook->addReloadFrameButton';
