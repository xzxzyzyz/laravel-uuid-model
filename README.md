# Laravel Uuid Model

[![CircleCI](https://circleci.com/gh/xzxzyzyz/laravel-uuid-model.svg?style=svg)](https://circleci.com/gh/xzxzyzyz/laravel-uuid-model)
[![Latest Stable Version](https://poser.pugx.org/xzxzyzyz/laravel-uuid-model/version)](https://packagist.org/packages/xzxzyzyz/laravel-uuid-model)
[![License](https://poser.pugx.org/xzxzyzyz/laravel-uuid-model/license)](https://packagist.org/packages/xzxzyzyz/laravel-uuid-model)

Using `uuid` in eloquent model.

## Installation

```bash
composer require xzxzyzyz/laravel-uuid-model
```

## Usage

Create primary key as string type.

```php
/**
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
	Schema::create('example', function(Blueprint $table) {
		$table->string('id')->primary();
		// ...
	});
}
```

And, Extends `Xzxzyzyz\Laravel\Uuid\Model` in your model.

```php
use Xzxzyzyz\Laravel\Uuid\Model;

class Example extends Model
{
	//...
}
```
