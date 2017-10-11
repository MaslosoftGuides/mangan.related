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

$company->save();

$found = Company::model()->find();

var_dump($found->name);
var_dump($found->address->city);
var_dump($found->address->street);
