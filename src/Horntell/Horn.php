<?php namespace Horntell;

class Horn {

	protected $request;

	public function __construct()
	{
		$this->request = new Http\Request;
	}

	public function toProfile($uid, $horn)
	{
		return $this->request->send('POST', "/profiles/$uid/horns", $horn);
	}
}