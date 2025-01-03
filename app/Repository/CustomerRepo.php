<?php

namespace App\Repository;

use App\Models\Customer;

interface CustomerRepo
{
    public function insert(Customer $customer): Customer;
    public function update(Customer $customer): Customer;
}
