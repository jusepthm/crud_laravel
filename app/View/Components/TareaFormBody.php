<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TareaFormBody extends Component
{
    private $tarea;
    /**
     * Create a new component instance.
     *
     * @param \App\Models\Tarea $tarea
     * @return void
     */
    public function __construct($tarea = null)
    {
        //
        $this->tarea = $tarea;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params = [
            'tarea' => $this->tarea,
        ];
        return view('components.tarea-form-body', $params);
    }
}
