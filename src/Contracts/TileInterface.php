<?php

/**
 * This file is part of the sfExampleContracts project.
 *
 * (c) Festim Kolgeci <festim.kolgei@pm.me>
 *
 * For complete copyright and license details, please refer
 * to the LICENSE file distributed with this source code.
 */

namespace FesKol\SfExampleContract\Contracts;

interface TileInterface
{
    public function getKey(): ?string;

    public function getTitle(): ?string;

    public function setTitle(string $title): TileInterface;

    public function getBody(): ?string;

    public function setBody(string $body): TileInterface;

    public function getPosition(): int;

    public function setPosition(int $position): TileInterface;
}