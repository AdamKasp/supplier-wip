<?php

namespace spec\App\Entity\Supplier;

use App\Entity\Supplier\Supplier;
use PhpSpec\ObjectBehavior;

final class SupplierSpec extends ObjectBehavior
{
    function its_name_is_mutable(): void
    {
        $this->setName('Adam supp');
        $this->getName()->shouldReturn('Adam supp');
    }

    function its_email_it_mutable(): void
    {
        $this->setEmail('adam@adam.com');
        $this->getEmail()->shouldReturn('adam@adam.com');
    }

    function its_status_is_mutable(): void
    {
        $this->setState('new');
        $this->getState()->shouldReturn('new');
    }
}
