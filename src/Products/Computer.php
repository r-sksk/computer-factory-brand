<?php

declare(strict_types=1);

namespace Practice\Products;

abstract class Computer {
    /**
     * @var string
     */
    public $brand;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $cpu;
    /**
     * @var string
     */
    public $memory;
    /**
     * @param string $brand
     * @param string $name
     * @param string $cpu
     * @param string $memory
     */
    public function __construct(
        string $brand,
        string $name,
        string $cpu,
        string $memory
    ) {
        $this->brand = $brand;
        $this->name = $name;
        $this->cpu = $cpu;
        $this->memory = $memory;
    }
    /**
     * @return string[]
     */
    public function toArray(): array
    {
        return [
            'brand' => $this->brand,
            'name' => $this->name,
            'type' => $this->type,
            'cpu' => $this->cpu,
            'memory' => $this->memory,
        ];
    }
}