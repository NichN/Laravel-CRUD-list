<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productmodel extends Model
{
    use HasFactory;
    public $table = "tbl_food";
    public $primaryKey = "Food_ID";
    public $fillable = ["Food_Name","Food_title","Food_Description","qty_Food","Food_Price"];
    public $timestamps = false;
}
