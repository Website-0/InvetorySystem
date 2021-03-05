<?php

namespace App\Http\Livewire;

use App\Models\EquipmentItem;
use Livewire\Component;
use Livewire\WithPagination;

class Equipment extends Component
{
    use WithPagination;
    public $search = '';
    public $orderBy = 'controlnumber';
    public $orderAsc = true;
    public $isOpen = 0;
    public $prooducts, $name, $price, $brand, $categorie, $product_id, $stock;

    public function render()
    {
        return view('livewire.equipment', [
            'equipment' => EquipmentItem::search($this->search)
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

    public function closeModel()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->controlnumber = '';
        $this->category = '';
        $this->brand = '';
        $this->model = '';
        $this->location = '';
        $this->purchaseprice = '';
        $this->yearofpurchase = '';
        $this->retiredate = '';
        $this->remarks = '';
        $this->accesories = '';
    }

    public function store()
    {
        $this->validate([
            'controlnumber' => 'required',
            'category' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'location' => 'required',
            'purchaseprice' => 'required',
            'yearofpurchase' => 'required',
            'remarks' => 'required',
            'accesories' => 'required'
        ]);

        EquipmentItem::updateOrCreate(['id' => $this->equiment_id], [
            'controlnumber' => $this->controlnumber,
            'category' => $this->category,
            'brand' => $this->brand,
            'model' => $this->model,
            'location' => $this->location,
            'purchaseprice' => $this->purchaseprice,
            'yearofpurchase' => $this->yearofpurchase,
            'remarks' => $this->remarks,
            'accesories' => $this->accesories,
        ]);

        session()->flash(
            'message',
            $this->equiment_id ? 'Equipment Updated Successfully' : 'Equipment Created Successfully'
        );

        $this->closeModel();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $equipment = EquipmentItem::findOrFail($id);
        $this->category = $equipment->category;
        $this->brand = $equipment->brand;
        $this->model = $equipment->model;
        $this->location = $equipment->location;
        $this->purchaseprice = $equipment->purchaseprice;
        $this->yearofpurchase = $equipment->yearofpurchase;
        $this->remarks = $equipment->remarks;
        $this->accesories = $equipment->accesories;

        $this->openModal();
    }

    public function delete($id)
    {
        EquipmentItem::find($id)->delete();
        session()->flash('message', 'Equipment Have Been Deleted Successfully');
    }
}
