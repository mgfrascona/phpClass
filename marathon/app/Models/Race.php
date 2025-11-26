<?php

namespace App\Models;

use CodeIgniter\Model;

class Race extends Model
{
    public function get_races() {
        $db = db_connect();
        $query = "Select * FROM race";
        $result = $db->query($query);
        return $result->getResultArray();
    }

    public function get_race($id) {
        $db = db_connect();
        $query = "Select * FROM race WHERE raceID = ?";
        $result = $db->query($query, [ $id ]);
        return $result->getFirstRow();
    }

    public function add_race($name, $description, $location, $dateTime)
    {
        $db = db_connect();
        $query = "INSERT INTO race(raceName, raceDesc, raceLocation, raceDateTime) VALUES(?,?,?,?)";
        $result = $db->query($query, [ $name, $description, $location, $dateTime ]);
    }

    public function delete_race($id) : void
    {
        $db = db_connect();
        $query = "DELETE FROM race WHERE raceID = ?";
        $db->query($query, [ $id ]);
    }

    public function update_race($id,$name, $description, $location, $dateTime)
    {
        $db = db_connect();
        $query = "UPDATE race SET raceName = ?, raceDesc = ?, raceLocation = ?, raceDateTime = ? WHERE raceID = ?";
        $db->query($query, [ $id ]);
    }
}