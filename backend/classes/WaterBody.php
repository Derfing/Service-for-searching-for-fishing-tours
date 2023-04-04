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
    protected int $waterBody;

    public function __construct()
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->area = $area;
        $this->averageDepth = $averageDepth;
    }

    public function getFullNameOfWaterBody()
    {
        if (isset($this->name) && isset($this->type)) {
            return $this->type.$this->name;
        }
        else {
            return "Incoplete Name!";
        }
    }
}
