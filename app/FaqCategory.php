<?php

namespace App;

use App;
use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model
{

    protected $table = 'faqs_category';
    public $timestamps = true;
    protected $guarded = ['id'];
    //protected $dateFormat = 'U';
    protected $dates = ['created_at', 'updated_at'];

}
