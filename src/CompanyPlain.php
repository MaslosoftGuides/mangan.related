<?php

namespace Maslosoft\Guides\Mangan;

use Maslosoft\Addendum\Interfaces\AnnotatedInterface;
use Maslosoft\Mangan\Sanitizers\MongoObjectId;
use MongoId;

/**
 * Company
 *
 * @author Piotr Maselkowski <pmaselkowski at gmail.com>
 */
class CompanyPlain implements AnnotatedInterface
{

	/**
	 * @Sanitizer(MongoObjectId)
	 * @see MongoObjectId
	 * @var MongoId
	 */
	public $_id = null;

	/**
	 * @RequiredValidator
	 * @var string
	 */
	public $name = '';

	/**
	 * @Related(AddressPlain, join = {'_id' = 'companyId'})
	 * @var AddressPlain
	 */
	public $address = null;

}
