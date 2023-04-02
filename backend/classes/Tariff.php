<?php

namespace classes;

// CREATE TABLE tariff (
//     tariff_id INT NOT NULL PRIMARY KEY,
//     trip_duration INT NOT NULL,
//     price INT NOT NULL,
//     season VARCHAR(20) NOT NULL,
//     base_name VARCHAR(50) NOT NULL,
//     FOREIGN KEY (base_name) REFERENCES base (base_name)
// );

class Tariff {
    protected int $id;
    protected int $tripDuration;
    protected int $price;
    protected string $season;
    protected string $nameOfBase;

    public function __construct(int $id, int $tripDuration, int $price, string $season, $nameOfBase)
    {
        $this->id = $id;
        $this->tripDuration = $tripDuration;
        $this->price = $price;
        $this->season = $season;
        $this->nameOfBase = $nameOfBase;
    }
}