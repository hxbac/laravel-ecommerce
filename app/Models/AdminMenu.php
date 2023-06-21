<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminMenu extends Model
{
    use HasFactory;

    protected $table = 'admin_menus';

    protected $fillable = [
        'name',
        'parent',
        'order',
        'route',
        'target_parent',
        'isActive',
    ];
}
