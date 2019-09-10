<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dompet extends Model
{
    // jika nama table bukan bentuk plural dari nama model
    // protected $table = 'dompet'

    // jika tabel tidak punya kolom created_at dan updated_at
    public $timestamps = 'false';

    // untuk membatasi kolom yang tidak boleh di inputkan
    protected $guarded = [];

    // untuk membatasi kolom yang boleh di inputkan
    // protected $fillable = ['nama'];
}
