<?php

namespace Maslosoft\Guides\Mangan;

use Maslosoft\Addendum\Interfaces\AnnotatedInterface;
use Maslosoft\Mangan\Sanitizers\MongoObjectId;

/**
 * Address
 *
 * @author Piotr Maselkowski <pmaselkowski at gmail.com>
 */
class AddressPlain implements AnnotatedInterface
{

	/**
	 * @Sanitizer(MongoObjectId)
	 * @see MongoObjectId
	 * @var MongoId
	 */
	public $_id = null;

	/**
	 * @Sanitizer(MongoObjectId)
	 * @see MongoObjectId
	 * @var MongoId
	 */
	public $companyId = null;

	/**
	 * @RequiredValidator
	 * @var string
	 */
	public $street = '';

	/**
	 * @RequiredValidator
	 * @var string
	 */
	public $city = '';

}
