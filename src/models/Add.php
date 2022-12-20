<?php 
class Add extends Database 
{
    public function create(string $name, string $distance, string $duration, string $elevation_gain, string $description): void
    {
        if (!$this->query(
            "INSERT INTO Hikes(name, distance, duration, elevation_gain, description) VALUES (?, ?, ?, ?, ?)",
            [
                $name,
                $distance,
                $duration,
                $elevation_gain,
                $description
            ]
        )) {
            throw new Exception('Error during registration.');
        }
    }
}
?>