<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    
    protected $table = "employee";
    protected $fillable= ['Emp_name','Emp_no', 'Designation','Dept_Id','email','Phone_No'];
}
