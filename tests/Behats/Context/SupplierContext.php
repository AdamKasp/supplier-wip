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

namespace App\Tests\Behats\Context;

use Behat\Behat\Context\Context;
use Behat\Mink\Session;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

final class SupplierContext implements Context
{
    /** @var UrlGeneratorInterface */
    private $router;

    /** @var Session */
    private $session;

    public function __construct(UrlGeneratorInterface $router, Session $session)
    {
        $this->router = $router;
        $this->session = $session;
    }

    /**
     * @When I want to create a new supplier
     */
    public function iWantToCreateANewSupplier(): void
    {
        $url = $this->router->generate('app_admin_supplier_create');
        $this->session->visit($url);
    }

    /**
     * @When I set its name as :name
     */
    public function iSetItsAs(string $name): void
    {
        $page = $this->session->getPage();
        $page->fillField('Name', $name);
    }

    /**
     * @When I set its email as :email
     */
    public function isetItsEmail(string $email): void
    {
        $page = $this->session->getPage();
        $page->fillField('Email', $email);
    }

    /**
     * @When I create it
     */
    public function iCreateIt(): void
    {
        $page = $this->session->getPage();
        $page->pressButton('Create');
    }

    /**
     * @Then I should have a new :name supplier with :email email
     */
    public function iShouldHaveANewSupplierWithEmail(string $name, string $email): void
    {
        throw new PendingException();
    }
}
