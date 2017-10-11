<?php

namespace Maslosoft\Guides\Mangan;

use MongoId;
use Maslosoft\Mangan\EmbeddedDocument;
use Maslosoft\Mangan\Sanitizers\MongoObjectId;

/**
 * Address
 *
 * @author Piotr Maselkowski <pmaselkowski at gmail.com>
 */
class Address extends EmbeddedDocument
{

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
