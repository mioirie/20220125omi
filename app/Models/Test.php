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

    public function getDetail()
    {
    //*    $txt = 'ID:'.$this->id . ' ' . $this->name . '(' . $this->age .  '才'.') '.$this->nationality;
    //*    return $txt; *//

        $txt = $this->created_at . $this->content;
        return $txt;
    }
}
