<?php

namespace GugaSobrinho\EmailsRepository\Traits;

trait TraitRelacionamento
{
  public function emails()
	{
		return $this->morphMany('GugaSobrinho\EmailsRepository\Models\Email', 'model');
	}
}
