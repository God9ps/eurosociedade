<?php

namespace euromilhoes;

use Illuminate\Database\Eloquent\Model;

class Society extends Model
{
    protected $fillable = ['name', 'id_admin', 'id_tipo', 'created_at', 'updated_at'];
    protected $table = 'societies';
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function societies()
    {
        return $this->belongsTo(Type::class);
    }
}
