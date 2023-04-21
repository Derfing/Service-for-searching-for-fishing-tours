<?php

namespace App\classes;

// CREATE TABLE tariff (
//     tariff_id INT NOT NULL PRIMARY KEY,
//     trip_duration INT NOT NULL,
//     price INT NOT NULL,
//     season VARCHAR(20) NOT NULL,
//     base_name VARCHAR(50) NOT NULL,
//     FOREIGN KEY (base_name) REFERENCES base (base_name)
// );

class Tariff
{
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

    static function getFilteredResult($seasons, $maxPrice, $connection)
    {
        if ($seasons && !$maxPrice) {
            $arrayOfSeasons = "";
            foreach ($seasons as $season) {
                $arrayOfSeasons .= "'$season',";
            }
            $arrayOfTypes = substr($arrayOfSeasons, 0, -1);
            $query = "SELECT * FROM tariff WHERE season IN ($arrayOfSeasons)";
        } elseif ($maxPrice && !$seasons) {
            $query = "SELECT * FROM tariff WHERE price <= '$maxPrice'";
        } elseif ($maxPrice && $seasons) {
            $arrayOfSeasons = "";
            foreach ($seasons as $season) {
                $arrayOfSeasons .= "'$season',";
            }
            $arrayOfSeasons = substr($arrayOfSeasons, 0, -1);
            $query = "SELECT * FROM tariff WHERE season IN ($arrayOfSeasons) OR price <= '$maxPrice'";
        }

        if ($query) {
            $result = $connection->query($query);
        }
        else
        {
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
