<?php

namespace App\Exceptions;

use Exception;

class PermissionDeniedException extends Exception {
	public function __construct() {
		parent::__construct();
	}
}