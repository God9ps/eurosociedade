<?php

namespace euromilhoes;

use Illuminate\Database\Eloquent\Model;

class Society extends Model
{
    protected $fillable = ['name', 'id_admin', 'id_tipo', 'created_at', 'updated_at'];

    protected $table = 'societies';

    public function admin()
    {
        return $this->belongsTo(User::class, 'id_admin');
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'id_tipo');
    }
}
