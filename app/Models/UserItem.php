<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserItem extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users_items';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'UserID',
        'CustomName',
        'ItemID',
        'EnhID',
        'Equipped',
        'Quantity',
        'Bank',
        'Chest',
        'Load',
        'DatePurchased'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'DatePurchased' => 'datetime',
    ];

    /**
     * Get the item associated with this user item.
     *
     * @return \App\Models\Item
     */
    public function Item()
    {
        return $this->belongsTo(Item::class, 'ItemID');
    }

    /**
     * Get the user who owns this item.
     *
     * @return \App\Models\LoreUser
     */
    public function LoreUser()
    {
        return $this->belongsTo(LoreUser::class, 'UserID', 'id');
    }

    /**
     * Get the enhancement associated with this user item.
     *
     * @return \App\Models\Enhancement
     */
    public function Enhancement()
    {
        return $this->belongsTo(Enhancement::class, 'EnhID');
    }
}
