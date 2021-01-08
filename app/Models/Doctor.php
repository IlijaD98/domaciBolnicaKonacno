<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Account;


class Doctor extends Model
{
    use HasFactory;
    public function accounts(){
        
        return $this->hasMany(Account::class);
    }
}
