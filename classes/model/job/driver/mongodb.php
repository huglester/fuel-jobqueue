<?php

namespace Jobqueue;

class Model_Job_Driver_Mongodb extends \Mongo_Crud
{
	public static function _init()
	{
		static::$_collection_name = \Config::get('jobqueue.collection_name');
	}

	public static function forge(array $data = array())
	{
		return parent::forge($data);
	}

	public function id()
	{
		return $this->_id;
	}
}