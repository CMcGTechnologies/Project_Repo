<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    public function complete(){
        // update the completed column of current assignment to true
        $this->completed = true;
        $this->save();
    }
}
