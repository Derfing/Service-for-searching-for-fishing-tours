<?php

namespace classes;

// CREATE TABLE waterbody (
//     waterbody_id INT NOT NULL PRIMARY KEY,
//     waterbody_name VARCHAR(50) NOT NULL,
//     waterbody_type VARCHAR(50) NOT NULL,
//     area INT NOT NULL,
//     average_depth INT NOT NULL
// );

class WaterBody 
{
    protected int $waterbodyId;
    protected string $waterbodyName;
    protected string $waterbodyType;
    protected int $area;
    protected int $averageDepth;

    public function getNameOfWaterbody()
    {
        return;
    }
}