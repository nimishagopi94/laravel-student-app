<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Student;
use Carbon\Carbon;

class Marks extends Model
{
    use SoftDeletes;

    protected $table = 'marks';

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $fillable = ['student_id', 'maths', 'science','history', 'term']; 

    public function student()
    {
      return $this->belongsTo(Student::class, 'student_id', 'id');
    }

}