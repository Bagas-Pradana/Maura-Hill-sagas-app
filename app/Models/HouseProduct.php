<?php

namespace App\Models;

use App\Casts\ArrayObjectCast;
use ArrayObject;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use PhpParser\Node\Expr\Cast;

class HouseProduct extends Model
{
    use HasFactory;

    // Daftar atribut yang bisa diisi (fillable)
    protected $fillable = [
        'uuid',
        'unit',
        'title',
        'description',
        'specification_list',
        'specification_table',
        'images',
    ];

    // Cast atribut JSON agar otomatis dikonversi ke array atau collection
    // protected $casts = [
    //     'specification_list' => 'array',
    //     'specification_table' => 'array',
    //     'images' => 'array'
    // ];

    // // Tambahkan datetime_now ke dalam appends
    // protected $appends = ['datetime_now'];

    // Event untuk generate UUID jika belum ada saat data dibuat
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->uuid)) {
                $model->uuid = Str::uuid();
            }
        });
    }

    // Buat accessor untuk datetime_now
    // public function getDatetimeNowAttribute()
    // {
    //     return Carbon::now()->format('Y-m-d H:i:s');
    // }

    // public function getImagesAttribute($value)
    // {
    //     return 'asdasdasd';
    // }

    // // Tambahkan mutator jika diperlukan
    // public function setImagesAttribute($value)
    // {
    //     $this->attributes['images'] = is_array($value) ? json_encode($value) : $value;
    // }

    // public function setSpecificationListAttribute($value)
    // {
    //     $this->attributes['specification_list'] = is_array($value) ? json_encode($value) : $value;
    // }

    // // Accessor & Mutator untuk specification_table
    // public function getSpecificationTableAttribute($value)
    // {
    //     return json_decode($value, true) ?: [];
    // }

    // public function setSpecificationTableAttribute($value)
    // {
    //     $this->attributes['specification_table'] = is_array($value) ? json_encode($value) : $value;
    // }
}
