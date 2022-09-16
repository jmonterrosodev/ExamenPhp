<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Cake;
use Carbon\Carbon;

class PastelForm extends Component
{
    private $cake;
    /**
     * Create a new component instance.
     * @param \App\Models\Cake $cake
     * @return void
     */
    public function __construct( $cake = null)
    {
        if( is_null( $cake ) )
        {
            $cake = Cake::make([
                'fechaVence' => Carbon::now(),
            ]);
        }
        $this->cake = $cake;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params = [
            'cake' => $this->cake,
        ];
        return view('components.pastel-form', $params);
    }
}
