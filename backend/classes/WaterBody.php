<?php

namespace App\classes;

// CREATE TABLE waterbody (
//     waterbody_id INT NOT NULL PRIMARY KEY,
//     waterbody_name VARCHAR(50) NOT NULL,
//     waterbody_type VARCHAR(50) NOT NULL,
//     area INT NOT NULL,
//     average_depth INT NOT NULL
// );

class WaterBody
{
    static function getFilteredResult($name, $types, $connection)
    {
        if (!$name && $types) {
            $arrayOfTypes = "";
            foreach ($types as $type) {
                $arrayOfTypes .= "'$type',";
            }
            $arrayOfTypes = substr($arrayOfTypes, 0, -1);
            $query = "SELECT * FROM waterbody WHERE waterbody_type IN ($arrayOfTypes)";
        } elseif ($name && !$types) {
            $query = "SELECT * FROM waterbody WHERE waterbody_name='$name'";
        } elseif ($name && $types) {
            $arrayOfTypes = "";
            foreach ($types as $type)
            {
                $arrayOfTypes .= "'$type',";
            }
            $arrayOfTypes = substr($arrayOfTypes, 0, -1);
            $query = "SELECT * FROM waterbody WHERE waterbody_name='$name' OR waterbody_type IN ($arrayOfTypes)";
        }

        $result = $connection->query($query);

        if (!$connection->errno) {
            foreach ($result as $row) {
                echo $row['waterbody_id'] . ' ' . $row['area'] . ' ' . $row['waterbody_name'] . '<br>';
            }
        } else {
            echo $connection->error;
        }
    }
}
