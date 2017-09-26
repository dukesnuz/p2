<?php

namespace David;

class ClassName {
    // Properties
    private $dishes;
    // Methods
	public function __construct($jsonData) {
        // Get data from JSON file
        $dishesJson = file_get_contents($jsonData);
        $this->dishes = json_decode($dishesJson, true);
        //var_dump($this->dishes);
    }

    public function getDish($maxCalories){
        $foundDishes = [];
        foreach ($this->dishes as $key => $dish) {
           //if ($this->$dishes[$key]['calories'] <= $maxCalories && $nutrition == $this->$dishes[$key]['nutrition'] && $protein == $this->$dishes[$key]['protein']) {
              if ($dish['calories'] <= $maxCalories) {
                  $foundDishes = $dish;
            }
        return $foundDishes;
    }
}
} // End class
