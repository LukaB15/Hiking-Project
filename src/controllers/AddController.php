<?php
declare(strict_types=1);

class AddController {

    private Add $addModel;

    public function __construct() {
        $this->addModel = new Add();
    }

    public function save(array $input): void {
        if(empty($_POST['name']) || empty($input['distance']) || empty($input['duration']) || empty($input['elevation_gain']) ||empty($_POST['description']))
        {
            throw new Exception("Form not validated");
        }

        $name = htmlspecialchars($input['name']);
        $date = date("d/m/Y");
        $distance = htmlspecialchars($input['distance']);
        $duration = htmlspecialchars($input['duration']);
        $elevation_gain = htmlspecialchars($input['elevation_gain']);
        $description = htmlspecialchars($input['description']);
        $update = "no";

        $this->addModel->create($name, $date, $distance, $duration, $elevation_gain, $description, $update);

        $id = $this->addModel->getLastInsertId();

        http_response_code(302);
        header('location: /');

    }

    public function showAddForm(): void
    {
        include 'views/includes/header.view.php';
        include 'views/add.view.php';
        include 'views/includes/footer.view.php';
    }

}

?>