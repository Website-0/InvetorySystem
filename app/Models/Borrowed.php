<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Borrowed extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'event',
        'eventplace',
        'eventdate',
        'borrowersname',
        'equipment_item_id'
    ];

    protected $searchableFields = ['*'];

    public function equipmentItem()
    {
        return $this->belongsTo(EquipmentItem::class);
    }

    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('id', 'like', '%' . $search . '%')
            ->orWhere('event', 'like', '%' . $search . '%')
            ->orWhere('eventplace', 'like', '%' . $search . '%')
            ->orWhere('eventdate', 'like', '%' . $search . '%')
            ->orWhere('borrowersname', 'like', '%' . $search . '%');
    }
}
