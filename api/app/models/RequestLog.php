<?php
namespace Models;

class RequestLog extends \Core\Model
{
	protected $guarded = array();

	public function application() {
		return $this->belongsTo('Models\App');
	}

}


