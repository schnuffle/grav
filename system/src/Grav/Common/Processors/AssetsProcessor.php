<?php
/**
 * @package    Grav.Common.Processors
 *
 * @copyright  Copyright (C) 2015 - 2018 Trilby Media, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav\Common\Processors;

class AssetsProcessor extends ProcessorBase implements ProcessorInterface
{
    public $id = 'assets';
    public $title = 'Assets';

    public function process()
    {
        $this->container['assets']->init();
        $this->container->fireEvent('onAssetsInitialized');
    }
}
