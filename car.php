<?php
class car {
    protected $brand;
    protected $model;
    protected $year;
    protected $doors;
    protected $type;

    public function __construct($brand="", $model="", $year="", $doors="", $type="") {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->doors = $doors;
        $this->type = $type;
    }

    public function getBrand() { return $this->brand; }
    public function getModel() { return $this->model; }
    public function getYear() { return $this->year; }
    public function getDoors() { return $this->doors; }
    public function getType() { return $this->type; }

    public function setBrand($v) { $this->brand = $v; }
    public function setModel($v) { $this->model = $v; }
    public function setYear($v) { $this->year = $v; }
    public function setDoors($v) { $this->doors = $v; }
    public function setType($v) { $this->type = $v; }
}

class super_car extends car {
    private $engine;
    private $color;
    private $engine_power;

    public function __construct($engine="", $color="", $engine_power=0) {
        $this->engine = $engine;
        $this->color = $color;
        $this->engine_power = $engine_power;
        $this->year = 2025;
    }
}
?>