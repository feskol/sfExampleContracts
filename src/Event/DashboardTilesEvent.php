<?php

namespace FesKol\SfExampleContract\Event;

use FesKol\SfExampleContract\Contracts\DashboardTilesInterface;
use Symfony\Contracts\EventDispatcher\Event;

/**
 * This file is part of the sfExampleContracts project.
 *
 * (c) Festim Kolgeci <festim.kolgei@pm.me>
 *
 * For complete copyright and license details, please refer
 * to the LICENSE file distributed with this source code.
 */
class DashboardTilesEvent extends Event
{
    public function __construct(
        private DashboardTilesInterface $dashboardTiles
    )
    {
    }

    public function getDashboardTiles(): DashboardTilesInterface
    {
        return $this->dashboardTiles;
    }

    public function setDashboardTiles(DashboardTilesInterface $dashboardTiles): void
    {
        $this->dashboardTiles = $dashboardTiles;
    }
}