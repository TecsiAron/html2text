<?php

declare(strict_types=1);

namespace EdituraEDU\Html2Text;

readonly class Config
{
    public function __construct(
        public bool $dropLinks = false,
        public string $characterSet = 'auto',
        public bool $ignoreErrors = false,
    ) {
    }
}
