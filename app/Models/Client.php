<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory; 
    protected $table="client";
    protected $fillable = ['prenoms','nom','email','password','type_de_compte','civilite','dateNaissance','numero','is_ok'];
}
