<?php

use Maslosoft\Guides\Mangan\Address;
use Maslosoft\Guides\Mangan\Company;

require 'bootstrap.php';

$address = new Address;
$address->city = 'Sao Paulo';
$address->street = 'New street';

$company = new Company;
$company->name = 'Maslosoft';
$company->address = $address;

$saved = $company->save();

var_dump($saved);
