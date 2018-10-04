# Laravel Uuid Model

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

And, Extends `Xzxzyzyz\Laravel\UUid\Model` in your model.

```php
use Xzxzyzyz\Laravel\UUid\Model;

class Example extends Model
{
	//...
}
```
