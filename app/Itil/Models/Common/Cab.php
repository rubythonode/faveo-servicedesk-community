<?php

namespace App\Itil\Models\Common;
use Illuminate\Database\Eloquent\Model;

class Cab extends Model
{
    protected $table = 'sd_cab';
    protected $fillable = [
        'name',
        'head',
        'approvers',
        'aproval_mandatory',
        ];
    
    public function setApproversAttribute($value){
        if($value){
            $this->attributes['approvers'] = implode(',', $value);
        }
    }
    
    public function getApproversAttribute($value){
        if($value){
            return explode(',', $value);
        }
    }
    
    public function setHeadAttribute($value){
        if($value==""){
            $this->attributes['head'] = NULL;
        }else{
            $this->attributes['head'] = $value;
        }
    }
    
    
    
}
