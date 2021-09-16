<?php

namespace App\Http\Livewire;

use App\Models\User;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class UsersTable extends LivewireDatatable
{
    public $model = User::class;
    public function render()
    {
        return view('pages.company');
    }

    public function columns()
    {
        //
    }

}
