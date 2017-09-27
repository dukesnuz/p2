<?php
namespace David;

class Menu
{
    // Properties
    private $dishes;
    // Methods
    public function __construct($jsonData)
    {
        // Get data from JSON file
        $dishesJson = file_get_contents($jsonData);
        $this->dishes = json_decode($dishesJson, true);
    }
    // Method finds dishes that match selected variables
    public function getDish($maxCalories, $nutrition, $protein)
    {
        $foundDishes = [];
        foreach ($this->dishes as $key => $dish) {
            if ($dish['calories'] <= $maxCalories && $nutrition == $dish['nutrition'] && $protein == $dish['protein']) {
                $foundDishes[$key] = $dish;
            }
        }
        return $foundDishes;
    }
} // End class
