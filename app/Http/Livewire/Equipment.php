<?php

namespace App\Http\Livewire;

use App\Models\EquipmentItem;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Equipment extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $search = '';
    public $orderBy = 'controlnumber';
    public $orderAsc = true;
    public $isOpen = 0;
    public $controlnumber, $name, $category, $photo, $brand, $model, $location, $purchaseprice, $yearofpurchase, $retiredate, $remarks, $accesories, $equiment_id;

    public function render()
    {
        return view('livewire.equipment', [
            'equipments' => EquipmentItem::search($this->search)
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
        $this->name = '';
        $this->controlnumber = '';
        $this->category = '';
        $this->brand = '';
        $this->model = '';
        $this->location = '';
        $this->purchaseprice = '';
        $this->yearofpurchase = '';
        $this->remarks = '';
        $this->accesories = '';
        $this->photo = '';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'controlnumber' => 'required',
            'category' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'location' => 'required',
            'purchaseprice' => 'required',
            'yearofpurchase' => 'required',
            'remarks' => 'required',
            'accesories' => 'required',
            'photo' => 'image|max:1024',
        ]);


        EquipmentItem::updateOrCreate(['id' => $this->equiment_id], [
            'name' => $this->name,
            'controlnumber' => $this->controlnumber,
            'categoryname' => $this->category,
            'brand' => $this->brand,
            'model' => $this->model,
            'location' => $this->location,
            'purchaseprice' => $this->purchaseprice,
            'yearofpurchase' => $this->yearofpurchase,
            'remarks' => $this->remarks,
            'accesories' => $this->accesories,
            'image' => $this->photo->store('photos', 'public'),

        ]);

        session()->flash(
            'message',
            $this->equiment_id ? 'Equipment Updated Successfully' : 'Equipment Created Successfully'
        );

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $equipment = EquipmentItem::findOrFail($id);
        $this->name = $equipment->name;
        $this->controlnumber = $equipment->controlnumber;
        $this->category = $equipment->categoryname;
        $this->brand = $equipment->brand;
        $this->model = $equipment->model;
        $this->location = $equipment->location;
        $this->purchaseprice = $equipment->purchaseprice;
        $this->yearofpurchase = $equipment->yearofpurchase->format('Y-m-d');
        $this->remarks = $equipment->remarks;
        $this->accesories = $equipment->accesories;

        $this->openModel();
    }

    public function delete($id)
    {
        EquipmentItem::find($id)->delete();
        session()->flash('message', 'Equipment Have Been Deleted Successfully');
    }
}
