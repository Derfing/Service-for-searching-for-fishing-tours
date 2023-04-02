<?php

namespace classes;

// CREATE TABLE base (
//     base_name VARCHAR(50) NOT NULL PRIMARY KEY,
//     coordinates VARCHAR(50) NOT NULL,
//     region_name VARCHAR(50) NOT NULL,
//     waterbody_id INT NOT NULL,
//     FOREIGN KEY (waterbody_id) REFERENCES waterbody (waterbody_id)
// );

class Base {
    protected string $name;
    protected string $coordinates;
    protected string $nameOfRegion;
    protected int $id;
}