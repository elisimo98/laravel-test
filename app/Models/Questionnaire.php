<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    protected $fillable = ['name'];

    public function question(){
        return $this->hasMany(Question::class);
    }
}

$questionniares = Questionnaire::with('Question')->get();

foreach ($questionniares as $questionnaire) {
    echo $questionnaire->Question;
}
