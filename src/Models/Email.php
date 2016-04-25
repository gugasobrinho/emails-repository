<?php

namespace GugaSobrinho\EmailsRepository\Models;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table = "emails";

    protected $fillable = [
        'email',
        'type_email',
        'model_id',
        'model_type'
    ];

    public function model()
    {
        return $this->morphTo();
    }
}
