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

interface DashboardTilesInterface
{
    /**
     * @return TileInterface[]
     */
    public function getTiles(): array;

    /**
     * @var TileInterface[] $tiles
     */
    public function setTiles(array $tiles): DashboardTilesInterface;

    public function getTile(string $key): ?TileInterface;

    public function hasTile(string $key): bool;

    public function setTile(TileInterface $tile): DashboardTilesInterface;

    public function addTile(TileInterface $tile): DashboardTilesInterface;

    public function removeTile(TileInterface $tile): DashboardTilesInterface;

    public function removeTileByKey(string $key): DashboardTilesInterface;
}