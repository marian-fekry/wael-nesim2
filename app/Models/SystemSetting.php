<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class SystemSetting extends Model
{
    use HasFactory;
    use Translatable;
    protected $fillable=['address','phone','email'];
    protected $translatable = ['updated_at'];

}
