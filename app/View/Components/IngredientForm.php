<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Ingredient;
use Carbon\Carbon;

class IngredientForm extends Component
{
    private $ingredient;
    /**
     * Create a new component instance.
     * @param \App\Models\Ingredient $ingredient
     * @return void
     */
    public function __construct($ingredient = null)
    {
        if( is_null( $ingredient ) )
        {
            $ingredient = Ingredient::make([
                'fechaVence' => Carbon::now(),
            ]);
        }
        $this->ingredient = $ingredient;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params = [
            'ingredient' => $this->ingredient,
        ];
        return view('components.ingredient-form', $params);
    }
}
