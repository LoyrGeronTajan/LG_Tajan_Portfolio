<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Employee extends Model
{
    use HasFactory;
    
    // protected $guarded = [];
    
    // Database
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'address',
        'email',
        'position',
    ];

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('id','DESC');
    }

    public function scopeSearch($query)
    {
        
        // Search Function
        if($search = request('search'))
        {
            
            $query->where('name','LIKE', "%{$search}%");
            $query->orWhere('address','LIKE', "%{$search}%");
            $query->orWhere('email','LIKE', "%{$search}%");
            $query->orWhere('position','LIKE', "%{$search}%");
        }

        return $query;
    }
}
