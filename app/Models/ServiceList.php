<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceList extends Model
{
    protected $table = 'servicelists';
    protected $fillable = ['serv_cate_id', 'title','description','duration','price'];

    public function service_category(){
        return $this->belongsTo(ServiceCategory::class,'serv_cate_id', 'id');
    }
}
