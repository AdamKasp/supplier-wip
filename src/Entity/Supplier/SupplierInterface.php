<?php

declare(strict_types=1);

namespace App\Entity\Supplier;

use Sylius\Component\Resource\Model\ResourceInterface;

interface SupplierInterface extends ResourceInterface
{
        public function setName(?string $name): void;

        public function getName(): ?string;

        public function setEmail(?string $email): void;

        public function getEmail(): ?string;

        public function setState(string $state): void;

        public function getState(): string;
}
