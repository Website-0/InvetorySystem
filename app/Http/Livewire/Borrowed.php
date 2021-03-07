<?php

namespace App\Http\Livewire;

use App\Models\Borrowed as ModelsBorrowed;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Borrowed extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;
    public $isOpen = 0;
    public $borrowed_id;
    public function render()
    {
        return view('livewire.borrowed', [
            'borroweds' => ModelsBorrowed::search($this->search)
                ->orderbBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->paginate(15),
        ]);
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModel();
    }

    public function openModel()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function delete($id)
    {
        ModelsBorrowed::find($id)->delete();
        session()->flash('message', 'Borrowed Have Been Deleted Successfully');
    }
}
