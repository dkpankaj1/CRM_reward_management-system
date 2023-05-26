<?php

use App\Models\Purchase;
use App\Models\RewardSetting;
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

// Customer > edit
Breadcrumbs::for ('customer.edit', function ($trail,Customer $customer) {
    $trail->parent('customer.index');
    $trail->push('Edit', route('customer.edit',$customer));
});


// Purchase
Breadcrumbs::for ('purchase.index', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Purchase', route('purchase.index'));
});
// Purchase > create
Breadcrumbs::for ('purchase.create', function ($trail) {
    $trail->parent('purchase.index');
    $trail->push('Create', route('purchase.create'));
});

// Purchase > show
Breadcrumbs::for ('purchase.show', function ($trail,Purchase $purchase) {
    $trail->parent('purchase.index');
    $trail->push('Show', route('purchase.show',$purchase));
});

// Purchase > edit
Breadcrumbs::for ('purchase.edit', function ($trail,Purchase $purchase) {
    $trail->parent('purchase.index');
    $trail->push('Edit', route('purchase.edit',$purchase));
});


// Setting > Reward
Breadcrumbs::for ('setting.reward.index', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Reward', route('setting.reward.index'));
});

// Setting > Reward > edit
Breadcrumbs::for ('setting.reward.edit', function ($trail,Customer $setting) {
    $trail->parent('setting.reward.index');
    $trail->push('Edit', route('setting.reward.update',$setting));
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