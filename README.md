# Laravel Storage Auto Fix

This package adds an Artisan command to handle the `Permission Denied` error that usually occurs on the `storage/logs` directory.

### Install

`composer require tbirrell/laravel-storage-autofix`

### Usage

`php artisan storage:fix-permissions`

### Behind the Scenes

This command updates the chown and chmod values for `bootstrap/cache` and `storage` to allow the Laravel application access.
