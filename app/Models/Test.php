<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = ['id','content','created_id','updated_id'];

    public static $rules = array(
        'id' =>'',
        'content' =>'',
        'created_id' =>'',
        'updated_id' =>'',
    );

    public function index()
    {
        $items = Test::all();
        return view('index', ['items' =>$items]);
    }

    
}
