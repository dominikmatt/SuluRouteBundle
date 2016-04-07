<?php

/*
 * This file is part of Sulu.
 *
 * (c) MASSIVE ART WebServices GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Bundle\RouteBundle\Manager;

use Sulu\Bundle\RouteBundle\Entity\RouteRepository;

class RouteManager implements RouteManagerInterface
{
    /**
     * @param RouteRepository $routeRepository
     */
    public function __constructor(RouteRepository $routeRepository) {
        $this->routeRepository = $routeRepository;
    }

    /**
     * creates a new route
     */
    public function create() {
        var_dump('create');
    }
}