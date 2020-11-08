<?php

namespace PazBorma\ReloadFrame\Hooks;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Backend\Template\Components\Buttons\InputButton;

/**
 * Add an reload frame button
 *
 * Class ReloadFrameHook
 * @package PazBorma\ReloadFrame\Hooks
 */
Class ReloadFrameHook
{
    /**
     * @param array $params
     * @param $buttonBar
     * @return array
     */
    public function addReloadFrameButton($params, &$buttonBar)
    {
        $buttons = $params['buttons'];

        $iconFactory = GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconFactory::class);

        $saveButton = $buttons[\TYPO3\CMS\Backend\Template\Components\ButtonBar::BUTTON_POSITION_LEFT][2][0];
        if ($saveButton instanceof InputButton) {
            $reloadFrameButton = $buttonBar->makeLinkButton()
                ->setTitle('Reload Frame')
                ->setIcon($iconFactory->getIcon('actions-refresh', \TYPO3\CMS\Core\Imaging\Icon::SIZE_SMALL))
                ->setOnClick("document.location.reload(true)")
                ->setShowLabelText(true);

            $buttons[\TYPO3\CMS\Backend\Template\Components\ButtonBar::BUTTON_POSITION_LEFT][10][0] = $reloadFrameButton;
        }
        return $buttons;
    }
}
