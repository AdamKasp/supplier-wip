<?php

namespace spec\App\Notifier;

use App\Entity\Supplier\SupplierInterface;
use App\Notifier\SupplierTrustingNotifierInterface;
use PhpSpec\ObjectBehavior;
use Sylius\Component\Mailer\Sender\SenderInterface;

class EmailSupplierTrustingNotifierSpec extends ObjectBehavior
{
    function let(SenderInterface $sender): void
    {
        $this->beConstructedWith($sender);
    }

    function it_implements_supplier_trusting_notifier_interface(): void
    {
        $this->shouldImplement(SupplierTrustingNotifierInterface::class);
    }

    function it_sends_email_to_trusted_supplier(SupplierInterface $supplier, SenderInterface $sender): void
    {
        $supplier->getEmail()->willReturn('adam@adam.com');

        $sender
            ->send('app_supplier_trusted', ['adam@adam.com'], ['supplier' => $supplier])
            ->shouldBeCalled()
        ;

        $this->notify($supplier);
    }
}
