<?php

namespace Mdhesari\LaravelViews\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class View extends Model
{
    protected $fillable = [
        'user_id', 'user_ip', 'group'
    ];

    protected $hidden = [
        'id', 'viewable_type', 'viewable_id', 'updated_at'
    ];

    public function setGroupAttribute($value)
    {
        $this->attributes['group'] = trim(Str::replaceLast('_', '', $value));
    }

    public function scopeGroup($query, $group)
    {
        return $query->whereGroup($group);
    }
}
