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

    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('id', 'like', '%' . $search . '%')
            ->orWhere('controlnumber', 'like', '%' . $search . '%')
            ->orWhere('categoryname', 'like', '%' . $search . '%')
            ->orWhere('brand', 'like', '%' . $search . '%')
            ->orWhere('model', 'like', '%' . $search . '%')
            ->orWhere('location', 'like', '%' . $search . '%')
            ->orWhere('purchaseprice', 'like', '%' . $search . '%')
            ->orWhere('yearofpurchase', 'like', '%' . $search . '%')
            ->orWhere('retiredate', 'like', '%' . $search . '%')
            ->orWhere('remarks', 'like', '%' . $search . '%')
            ->orWhere('accesories', 'like', '%' . $search . '%')
            ->orWhere('yearofpurchase', 'like', '%' . $search . '%')
            ->orWhere('retiredate', 'like', '%' . $search . '%')
    }
}
