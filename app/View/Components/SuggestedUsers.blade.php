<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\User;

class SuggestedUsers extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $users;

    public function __construct($title = '')
    {
        $this->title = $title;
        $this->users = User::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.users.suggested');
    }
}
