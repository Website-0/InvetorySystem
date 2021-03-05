<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EquipmentItem extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'controlnumber',
        'categoryname',
        'brand',
        'model',
        'location',
        'purchaseprice',
        'yearofpurchase',
        'retiredate',
        'remarks',
        'accesories',
        'image',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'equipment_items';

    protected $casts = [
        'yearofpurchase' => 'date',
        'retiredate' => 'date',
    ];

    public function borroweds()
    {
        return $this->hasMany(Borrowed::class);
    }
}
