<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    public function CustomerDetails(){
    	return $this->hasOne('App\Customer', 'id', 'customers_id');
	}
}
