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

namespace App\Notifier;

use App\Entity\Supplier\SupplierInterface;

interface SupplierTrustingNotifierInterface
{
    public function notify(SupplierInterface $supplier): void;
}
