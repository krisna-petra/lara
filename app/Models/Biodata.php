<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;
    protected $connection = 'mysql'; // koneksi key database project
    protected $table = 'biodata'; // nama tabel

    public $fillable = [
        'nama',
        'tgl_lahir',
        'alamat',
        'notelp'
    ];

    public $guarded = [
        'tahun_masuk',
        'is_aktif'
    ];

    protected $casts = [
        'nama' => 'string',
        'notelp' => 'string',
    ];

    public static array $rules = [
        'nama' => 'required|string|max:255',
        'tahun_masuk' => 'required|integer',
        'tgl_lahir' => 'required|date',
        'alamat' => 'nullable|string|max:255',
        'notelp' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    // fungsi relasi, biodata mencari ke tabel (model) referensi StatusBiodata -- contoh
    public function status_biodata()
    {
        return $this->belongsTo(StatusBiodata::class, 'statusbiodata_id', 'id');
    }

    // fungsi relasi, biodata mencari N data transaksi -- contoh
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'biodata_id', 'id');
    }
}

// use App\Models\Bidoata;

// $biodata = Biodata::create([
//     'nama' => 'namanya',
//     'tgl_lahir' => '2000-01-01'
// ]);