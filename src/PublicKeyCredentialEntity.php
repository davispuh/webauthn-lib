<?php

declare(strict_types=1);

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2018 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Webauthn;

abstract class PublicKeyCredentialEntity implements \JsonSerializable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string|null
     */
    private $icon;

    public function __construct(string $name, ?string $icon)
    {
        $this->name = $name;
        $this->icon = $icon;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function jsonSerialize(): array
    {
        $json = [
            'name' => $this->name,
        ];
        if (null !== $this->icon) {
            $json['icon'] = $this->icon;
        }

        return $json;
    }
}
