<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Teacher;
use App\Models\Marks;
use Carbon\Carbon;

class Student extends Model
{
    use SoftDeletes;

    protected $table = 'student';

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $fillable = ['gender', 'name', 'age','gender', 'teacher_id']; 

    public function teacher()
    {
      return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }

    public function marks()
    {
      return $this->hasMany(Marks::class, 'student_id', 'id');
    }
     

}
