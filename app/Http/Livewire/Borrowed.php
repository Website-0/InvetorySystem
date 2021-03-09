<?php

namespace App\Http\Livewire;

use App\Models\Borrowed as ModelsBorrowed;
use App\Models\EquipmentItem;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use PDF;

class Borrowed extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;
    public $isOpen = 0;
    public $borrowed_id, $event, $eventplace, $eventdate, $borrowersname, $equipment_item_id;
    public function render()
    {
        return view('livewire.borrowed', [
            'equipments' => EquipmentItem::all(),
            'borroweds' => ModelsBorrowed::search($this->search)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->paginate(15),
        ]);
    }

    public function ViewPDF()
    {
        $data = [
            'borroweds' => ModelsBorrowed::search($this->search)->get()
        ];
        $pdfContent = PDF::loadView('PDF.test', $data)->output();
        return response()->streamDownload(
            fn () => print($pdfContent),
            "filename.pdf"
        );
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
        $borrowed = ModelsBorrowed::findOrFail($id);
        $this->event = $borrowed->event;
        $this->eventplace = $borrowed->eventplace;
        $this->eventdate = $borrowed->eventdate;
        $this->borrowersname = $borrowed->borrowersname;
        $this->equipment_item_id = $borrowed->equipment_item_id;

        $this->openModel();
    }

    public function delete($id)
    {
        ModelsBorrowed::find($id)->delete();
        session()->flash('message', 'Borrowed Have Been Deleted Successfully');
    }
}
