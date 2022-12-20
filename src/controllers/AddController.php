<?php
declare(strict_types=1);

class AddController {

    private Add $addModel;

    public function __construct() {
        $this->addModel = new Add();
    }

    public function save(array $input): void {
        if(empty($input['name']) || empty($input['distance']) || empty($input['duration']) || empty($input['elevation_gain']) ||empty($input['description']))
        {
            throw new Exception("Form not validated");
        }

        $name = htmlspecialchars($input['name']);
        $distance = htmlspecialchars($input['distance']);
        $duration = htmlspecialchars($input['duration']);
        $elevation_gain = htmlspecialchars($input['elevation_gain']);
        $description = htmlspecialchars($input['description']);

        $this->addModel->create($name, $distance, $duration, $elevation_gain, $description);

        $id = $this->addModel->getLastInsertId();

    }

    public function showAddForm(): void
    {
        include 'views/includes/header.view.php';
        include 'views/add.view.php';
        include 'views/includes/footer.view.php';
    }

}

?>