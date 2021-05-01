<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Teacher extends Model
{
    use SoftDeletes;

    protected $table = 'teacher';

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $fillable = [ 'name']; 

 public function students()
    {
      return $this->hasMany(Student::class, 'teacher_id', 'id');
    }

}
