<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOperation extends Model
{
    use HasFactory;
    protected $table = 'type_operations';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = ['id_client','id_type_op','montant','solde_initial','new_solde','date'];
}
