<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Borrowed extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['equipment_item_id'];

    protected $searchableFields = ['*'];

    public function equipmentItem()
    {
        return $this->belongsTo(EquipmentItem::class);
    }
}
