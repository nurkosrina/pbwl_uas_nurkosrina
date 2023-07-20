<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mapel extends Model
{
    use HasFactory;
    protected $table = "tb_bus";
    protected $primaryKey = "kode_id";
    protected $guarded = [];

    public function guru(): HasMany
    {
        return $this->hasMany(Guru::class, 'bus_id_guru', 'bus_id');
}
    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class, 'kode_id_mapel', 'kode_id');
    }

}