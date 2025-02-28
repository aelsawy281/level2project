<?php

namespace App\View\Components;

use App\Models\Member;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FrontTeamComponent extends Component
{
    public $team;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->team=Member::all();

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front-team-component');
    }
}
