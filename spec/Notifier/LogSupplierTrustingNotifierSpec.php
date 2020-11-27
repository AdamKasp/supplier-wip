<?php

namespace spec\App\Notifier;

use App\Entity\Supplier\SupplierInterface;
use App\Notifier\SupplierTrustingNotifierInterface;
use PhpSpec\ObjectBehavior;
use Psr\Log\LoggerInterface;

class LogSupplierTrustingNotifierSpec extends ObjectBehavior
{
    function let(LoggerInterface $logger): void
    {
        $this->beConstructedWith($logger);
    }

    function it_implements_supplier_trusting_notifier_interface(): void
    {
        $this->shouldImplement(SupplierTrustingNotifierInterface::class);
    }

    function it_logs_supplier_trusting_notification(SupplierInterface $supplier, LoggerInterface $logger): void
    {
        $supplier->getEmail()->willReturn('adam@adam.com');

        $logger->info('Supplier "adam@adam.com" has just been trusted!')->shouldBeCalled();

        $this->notify($supplier);
    }
}
