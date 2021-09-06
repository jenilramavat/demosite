<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    
    protected $connection = 'mysql';
    protected $fillable = [];
    protected $guarded = array('ID');
    protected $table = 'tblsupplier';
    public  $primaryKey = "ID";

    

}
