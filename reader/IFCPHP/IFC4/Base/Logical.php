<?php

namespace IFCPHP\IFC4\Base;
use IFCPHP\IFC4 as IFC;

class Logical extends IFC\Common{

	public function __construct($value) {
		$this->values[0] = $value;
	}
}
