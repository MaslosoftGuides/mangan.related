<?php

namespace Maslosoft\Guides\Mangan;

use Maslosoft\Mangan\Document;

/**
 * Company
 *
 * @author Piotr Maselkowski <pmaselkowski at gmail.com>
 */
class Company extends Document
{

	/**
	 * @RequiredValidator
	 * @var string
	 */
	public $name = '';

	/**
	 * @Related(Address, join = {'_id' = 'companyId'})
	 * @var Address
	 */
	public $address = null;

}
