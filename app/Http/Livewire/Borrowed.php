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
    public $borrowed_id, $event, $eventplace, $eventdate, $borrowersname;
    public function render()
    {
        return view('livewire.borrowed', [
            'borroweds' => ModelsBorrowed::search($this->search)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
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

    private function resetInputFields()
    {
        $this->event = '';
        $this->eventplace = '';
        $this->eventdate = '';
        $this->borrowersname = '';
        $this->equipment_item_id = '';
    }

    public function store()
    {
        $this->validate([
            'event' => 'required',
            'eventplace' => 'required',
            'eventdate' => 'required',
            'borrowersname' => 'required',
            'equipment_item_id' => 'required',
        ]);


        ModelsBorrowed::updateOrCreate(['id' => $this->borrowed_id], [
            'event' => $this->event,
            'eventplace' => $this->eventplace,
            'eventdate' => $this->eventdate,
            'borrowersname' => $this->borrowersname,
            'equipment_item_id' => $this->equipment_item_id,

        ]);

        session()->flash(
            'message',
            $this->borrowed_id ? 'Equipment Updated Successfully' : 'Equipment Created Successfully'
        );

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $equipment = ModelsBorrowed::findOrFail($id);
        $this->event = $equipment->event;
        $this->eventplace = $equipment->eventplace;
        $this->eventdate = $equipment->eventdate;
        $this->borrowersname = $equipment->borrowersname;

        $this->openModel();
    }

    public function delete($id)
    {
        ModelsBorrowed::find($id)->delete();
        session()->flash('message', 'Borrowed Have Been Deleted Successfully');
    }
}
