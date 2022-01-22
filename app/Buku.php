<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table ="bukus";
    protected $fillable=['judul','pengarang' ];
    protected $primaryKey ="id";
    // protected $fillable=[
    //     'id','judul','pengarang'
    // ];  
}
