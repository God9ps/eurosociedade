<?php

namespace euromilhoes;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function societies()
    {
        return $this->hasMany(Society::class);
    }
}
