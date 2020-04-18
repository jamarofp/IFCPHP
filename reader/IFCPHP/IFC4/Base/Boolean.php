<?php

namespace IFCPHP\IFC4\Base;
use IFCPHP\IFC4 as IFC;

class Boolean extends IFC\Common{

	public function __construct($value) {
		if($value == '.T.') $this->values[0] = true;
    else $this->values[0] = false;
	}
}
