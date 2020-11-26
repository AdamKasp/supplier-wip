<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace App\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AdminMenuListener
{
    public function addSuppliersMenu(MenuBuilderEvent $event): void
    {
        $catalogMenu = $event->getMenu()->getChild('catalog');

        $catalogMenu
            ->addChild('suppliers', ['route' => 'app_admin_supplier_index'])
            ->setLabel('app.ui.manage_suppliers')
            ->setLabelAttribute('icon', 'auto')
        ;
    }
}
