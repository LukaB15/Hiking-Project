<?php 
class Add extends Database 
{
    public function create(string $name, string $date, string $distance, string $duration, string $elevation_gain, string $description, string $update): void
    {
        if (!$this->query(
            "INSERT INTO Hikes(name, date, distance, duration, elevation_gain, description, isUpdate) VALUES(?, ?, ?, ?, ?, ?, ?);",
            [
                $name,
                $date,
                $distance,
                $duration,
                $elevation_gain,
                $description,
                $update
            ]
        )) {
            throw new Exception('Error during registration.');
        }
    }
}
?>