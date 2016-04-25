<?php

namespace GugaSobrinho\EmailsRepository\Repositories;

use GugaSobrinho\EmailsRepository\Models\Email;

class EmailsRepositoryEloquent
{
    protected $email;

    public function __construct(Phone $email)
    {
        $this->email = $email;
    }

    public function create($request)
    {
        return $this->email->create($request);
    }

    public function delete($id, $model)
    {
        return $this->email->where('model_id', $id)->where('model_type', $model)->delete();
    }
}
