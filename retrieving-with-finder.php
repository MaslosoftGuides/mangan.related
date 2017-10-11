<?php

use Maslosoft\Guides\Mangan\AddressPlain;
use Maslosoft\Guides\Mangan\Company;
use Maslosoft\Guides\Mangan\CompanyPlain;
use Maslosoft\Mangan\EntityManager;
use Maslosoft\Mangan\Finder;

require 'bootstrap.php';

// Saving and retrieving plain PHP objects

$address = new AddressPlain;
$address->city = 'Sao Paulo';
$address->street = 'New street';

$company = new CompanyPlain;
$company->name = 'Maslosoft';
$company->address = $address;

(new EntityManager($company))->save();

$found = (new Finder(new Company))->find();

var_dump($found->name);
var_dump($found->address->city);
var_dump($found->address->street);
