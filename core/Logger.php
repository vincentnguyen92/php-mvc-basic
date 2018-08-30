<?php
namespace Vincent\Core;

class Logger
{
	public function __construct()
	{
		ini_set('display_errors', 1);
		ini_set('log_errors', 1);
	}
}