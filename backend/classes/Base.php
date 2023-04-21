<?php

namespace App\classes;

// CREATE TABLE base (
//     base_name VARCHAR(50) NOT NULL PRIMARY KEY,
//     coordinates VARCHAR(50) NOT NULL,
//     region_name VARCHAR(50) NOT NULL,
//     waterbody_id INT NOT NULL,
//     FOREIGN KEY (waterbody_id) REFERENCES waterbody (waterbody_id)
// );

class Base
{
    protected string $name;
    protected string $coordinates;
    protected string $nameOfRegion;
    protected int $idOfWaterBody;

    public function __construct(string $name, string $coordinates, string $nameOfRegion, int $idOfWaterBody)
    {
        $this->name = $name;
        $this->coordinates = $coordinates;
        $this->nameOfRegion = $nameOfRegion;
        $this->idOfWaterBody = $idOfWaterBody;
    }

    static function getFilteredResult($name, $region, $connection)
    {
        if (!$name && $region) {
            $query = "SELECT * FROM base WHERE region_name = '$region'";
        } elseif ($name && !$region) {
            $query = "SELECT * FROM base WHERE base_name = '$name'";
        } elseif ($name && $region) {
            $query = "SELECT * FROM base WHERE base_name = '$name' AND region_name = '$region'";
        }

        if ($query) {
            $result = $connection->query($query);
        } else {
            echo "-2";
            return 0;
        }

        if (!$connection->errno) {
            // foreach ($result as $row) {
            //     echo $row['waterbody_id'] . ' ' . $row['area'] . ' ' . $row['waterbody_name'] . '<br>';
            // }
            if (mysqli_num_rows($result)) {
                echo "1";
            } else {
                echo "0";
            }
        } else {
            // echo $connection->error;
            echo "-1";
        }
    }
}
