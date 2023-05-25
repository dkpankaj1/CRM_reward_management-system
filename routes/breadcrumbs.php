<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use App\Models\Customer;

// Dashboard
Breadcrumbs::for ('dashboard', function ($trail) {
    $trail->push('Dashboard', route('dashboard'));
});

// Customer
Breadcrumbs::for ('customer.index', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Customer', route('customer.index'));
});

// Customer > create
Breadcrumbs::for ('customer.create', function ($trail) {
    $trail->parent('customer.index');
    $trail->push('Create', route('customer.create'));
});

// Customer > show
Breadcrumbs::for ('customer.show', function ($trail,Customer $customer) {
    $trail->parent('customer.index');
    $trail->push('Show', route('customer.show',$customer));
});

// Customer > show
Breadcrumbs::for ('customer.edit', function ($trail,Customer $customer) {
    $trail->parent('customer.index');
    $trail->push('Edit', route('customer.edit',$customer));
});

















// Dashboard
Breadcrumbs::for ('error.404', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Error 404');
});



// Profile
Breadcrumbs::for ('profile.update', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Profile', route('profile.edit'));
});

// Profile > Edit
Breadcrumbs::for ('password.update', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Password Update', route('password.edit'));
});

?>