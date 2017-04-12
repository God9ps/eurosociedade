<?php

namespace euromilhoes;

use Illuminate\Database\Eloquent\Model;

class Society extends Model
{
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function societies()
    {
        return $this->belongsTo(Type::class);
    }
}
