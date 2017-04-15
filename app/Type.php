<?php

namespace euromilhoes;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Type extends Model
{

    public function societies()
    {
        return $this->hasMany(Society::class);
    }
}
