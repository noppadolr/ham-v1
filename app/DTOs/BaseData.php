<?php

declare(strict_types=1);

namespace App\DTOs;

abstract readonly class BaseData
{
    abstract public static function fromArray(array $data): static;

    abstract public function toArray(): array;
}
