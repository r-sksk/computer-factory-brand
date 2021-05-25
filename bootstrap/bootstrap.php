<?php

require INC_ROOT . '/vendor/autoload.php';

use Practice\Factories\BrandAFactory;
use Practice\Factories\BrandBFactory;
use Practice\Factories\BrandCFactory;

$data = [
    [
        'brand' => 'Dell',
        'name' => 'XPS 13',
        'type' => 'laptop',
        'cpu' => 'Intel Core i3-1115G4',
        'memory' => '8GB LPDDR4x 4267MHz',
        'battery' => '52 WHr',
        'weight' => '1.16kg',
    ], [
        'brand' => 'Dell',
        'name' => 'XPS Desktop',
        'type' => 'desktop',
        'cpu' => 'Intel Core i3-10100',
        'memory' => '1x8GB DDR4 2666MHz',
    ], [
        'brand' => 'Dell',
        'name' => 'Alienware m15 R4',
        'type' => 'laptop',
        'cpu' => 'Intel Core i9-10980HK',
        'memory' => '32GB DDR4 2933MHz',
        'battery' => '86 WHr',
        'weight' => '2.11kg',
    ], [
        'brand' => 'Apple',
        'name' => 'MacBook Air',
        'type' => 'laptop',
        'cpu' => 'Apple M1 chip',
        'memory' => '8GB',
        'battery' => '49.9 WHr',
        'weight' => '1.29kg',
    ], [
        'brand' => 'Apple',
        'name' => 'Mac Pro',
        'type' => 'desktop',
        'cpu' => '3.5GHz Intel Xeon W',
        'memory' => '4x8GB DIMMs',
    ], [
        'brand' => 'Apple',
        'name' => 'Mac mini',
        'type' => 'desktop',
        'cpu' => 'Apple M1 chip',
        'memory' => '8GB',
    ], [
        'brand' => 'FUJITSU',
        'name' => 'LIFEBOOK A3510',
        'type' => 'laptop',
        'cpu' => 'Intel Core i5-1035G1',
        'memory' => '32GB',
        'battery' => '45 WHr',
        'weight' => '1.95kg',
    ], [
        'brand' => 'FUJITSU',
        'name' => 'ESPRIMO D538',
        'type' => 'desktop',
        'cpu' => 'Intel Core i7-9700',
        'memory' => '32GB DDR4 2666 MHz',
    ],
];