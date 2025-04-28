
# Request Lifecycle

- The entry point for all requests to a Laravel application is the `public/index.php` file.

- Then it retrieves an instance of the Laravel application from`bootstrap/app.php` script. Laravel itself creates an instance of the application, is the initial/first step.

- The incoming request is sent to either the HTTP kernel or the console kernel, depending on the type of request that is entering the application .These two kernels serve as the central location that all requests flow through.

- HTTP kernel, which is placed in `app/Http/Kernel.php`. It just receive a Request and return a Response. Bootstrappers that are defined by the Kernel class, which configures error handling, configure logging, detect environments and other tasks to be done before the request handled.

- kernel loads service providers as part of the bootstrapping action. Providers that are needed for the application are placed in `config/app.php` configuration file.

- While the register method calls, all the providers will be registered. Once all providers are registered, then boot method will be called.

- Once the application have been bootstrapped and all service providers are registered and booted, the request will be handed over to the router for dispatching. The router will dispatch the request to a route or controller, as well as run any route specific middleware.

- Router will direct the HTTP Request to a Controller or return a view or responses directly by omitting the controller. These routes will be placed in `app/routes.php`:
	- Controller `app/controllers/` performs specific actions and sends data to a View.
	- View `app/views/` formats the data appropriately, providing the HTTP Response.

[Reference](https://medium.com/@ankitatejani84/laravel-request-lifecycle-7c2145aa1257)

---
# Routing in Laravel


- Routes are actually the web URLs that you can visit in your web application. For example `/home`, `/profile`,` /dashboard`, etc are all different routes that one can create in a Laravel Application.
- all of our routes are going to be written in `routes/web.php` file as this directory is made standard for all our web-related routes.

*Examples:*

```php
// Creating a new route
Route::get('/sayhello', function() {
	return 'Hey ! Hello';
})
```

```php
// Creating a new route
Route::get('/', function() {
	return view('home');
})
```


[Reference](https://www.geeksforgeeks.org/laravel-routing-basics/)

---

# Facades

## What are *Facades* in Laravel?

- **Facades** give you a short, "static-like" way to use classes from Laravel's **service container**.
- Example: Instead of writing a long code to use caching, you just write:
    
```php
	use Illuminate\Support\Facades\Cache;
	Cache::get('key');
```
    
## Helper Functions:

- Laravel also has **global helper functions** like `view()`, `response()`, `url()`, `config()`, etc.
- They do similar jobs as facades but are even easier (no need to import classes).
    

## When to Use Facades:

- Facades are fast and clean but be careful: if you use too many in one class, it might get messy.
- If your class is getting too big, split it into smaller classes.
## Facades vs Dependency Injection:

- Both are good for testing.
- Even though facades _look_ static, they are actually dynamic and mockable during tests.
## Facades vs Helper Functions:

- No real difference in practice.
- You can test helper functions the same way you test facades.

[Reference](https://laravel.com/docs/11.x/facades)


---

# Blade Templates and How it works 

## What is Blade in Laravel?

***Blade*** is Laravel’s built-in template engine that allows developers to write dynamic HTML with embedded PHP in a more readable and maintainable way.

Unlike traditional PHP templates, ***Blade*** provides template inheritance and reusable components, making development much more efficient.


## Why Use Blade?

- Cleaner Syntax
- Template Inheritance
- Reusable Components
- Security Features

## Common Blade Directives 

### Echo Data

Use `{{ }}` to display variables.

```php
<p> {{ $name }} </p>
```


### Blade Conditionals

Use `@if` , `@elseif` , `@else` for conditionals.

```php
@if($age >= 18)
	<p> Adult! </p>
@else
	<p> Minor! </p>
@endif
```

### Blade Loops

Use `@foreach` , `@for` , `@while` for Loops.

```php
@foreach($users as $user)
	<p>{{ $user->name }} </p>
@endforeach
```


[Reference]([Laravel Blade Template Engine: A Beginner's Guide - DEV Community](https://dev.to/icornea/laravel-blade-template-engine-a-beginners-guide-54bi#:~:text=Blade%20is%20Laravel%E2%80%99s%20built-in%20template%20engine%20that%20allows,making%20development%20much%20more%20efficient.%20Why%20Use%20Blade%3F))

---

# What is ORM and Why it is useful ?

**Object-relational mapping (ORM)** is a key concept in the field of **Database Management Systems (DBMS)**, addressing the bridge between the object-oriented programming approach and relational databases.

**ORM** is critical in data interaction simplification, code optimization, and smooth blending of applications and databases.

[Reference]([What is Object-Relational Mapping (ORM) in DBMS? | GeeksforGeeks](https://www.geeksforgeeks.org/what-is-object-relational-mapping-orm-in-dbms/))

---
