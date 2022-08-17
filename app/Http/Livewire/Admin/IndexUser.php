<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

use Livewire\WithPagination;

class IndexUser extends Component
{
    use WithPagination;

    public $search;

    protected $paginationTheme = "bootstrap";

    public function updatingsearch(){
        $this->resetPage();
    }

    public function render()
    {
        $users = User::where("name", "LIKE", "%" . $this->search . "%")
        ->orwhere("email", "LIKE", "%" . $this->search . "%")
        ->paginate();
        return view('livewire.admin.index-user', compact("users"));
    }
}
