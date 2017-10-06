<?php

Breadcrumbs::register('dashboard', function ($breadcrumbs) {
    $breadcrumbs->push('Dashboard', route('dashboard'), ['icon' => 'fa-dashboard']);
});

// Users
Breadcrumbs::register('users.index', function ($breadcrumbs) {
    $breadcrumbs->push('Users', route('users.index'), ['icon' => 'fa-users']);
});

// Users > Create User
Breadcrumbs::register('users.create', function ($breadcrumbs) {
    $breadcrumbs->parent('users.index');
    $breadcrumbs->push('Create User', route('users.create'), ['icon' => 'fa-user-plus']);
});

// Users > [User Name] > Edit User
Breadcrumbs::register('users.edit', function ($breadcrumbs, $user) {
    $breadcrumbs->parent('users.index');
    $breadcrumbs->push('Edit User', route('users.edit', $user->id), ['icon' => 'fa-user-plus']);
});


// Roles
Breadcrumbs::register('roles.index', function ($breadcrumbs) {
    $breadcrumbs->push('Roles', route('roles.index'), ['icon' => 'fa-shield']);
});

// Roles > Create Role
Breadcrumbs::register('roles.create', function ($breadcrumbs) {
    $breadcrumbs->parent('roles.index');
    $breadcrumbs->push('Create Role', route('roles.create'), ['icon' => 'fa-shield']);
});

// Roles > [Role Name] > Edit Role
Breadcrumbs::register('roles.edit', function ($breadcrumbs, $user) {
    $breadcrumbs->parent('roles.index');
    $breadcrumbs->push('Edit Role', route('roles.edit', $user->id), ['icon' => 'fa-shield']);
});