<?php

declare(strict_types=1);

namespace Practice\Factories;

use Practice\Products\Computer;

interface ComputerFactory {
    /**
     * @param string $brand
     * @param string $name
     * @param string $cpu
     * @param string $memory
     *
     * @return Computer
     */
    public function createComputer(
        string $brand,
        string $name,
        string $cpu,
        string $memory,
        string $battery,
        string $weight
    ): Computer;
}