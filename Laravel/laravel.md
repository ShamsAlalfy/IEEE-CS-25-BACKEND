
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

# Defining relationships in Eloquent models

To have relationships between database tables, first you still need to take care of database **fields** and **foreign keys**. Usually, in database migration statement.

```php
Schema::table('posts', function (Blueprint $table) {
    $table->integer('user_id')->unsigned();
    $table->foreign('user_id')->references('id')->on('users');
});
```

we also may specify the behavior for the **delete** and **update** actions on related tables by : 

- **CASCADE:** - deletes/updates child entry along with the parent entry
- **RESTRICT**: throws error and doesn’t delete/updates parent entry
- **SET NULL**: deletes parent entry and sets child foreign key entry to NULL


## ONE TO ONE Relationship

### hasOne Function
 
```php
class User extends Model
{
    function profile() {
        return $this->hasOne('App\UserProfile');
    }
}
```

we have **hasOne()** method with only one parameter – related model’s class name with namespace.

Laravel automatically “knows” that there is a relationship on main table’s **id** field and related table’s **user_id** – it is formed by main table’s name, putting it to singular and adding **_id**.

### belongsTo Function

```php
class UserProfile extends Model
{
    function user() {
        return $this->belongsTo('App\User');
    }
}
```

we may also have a relationship from **UserProfile** to **User** model, a _reverse_ from hasOne. This one is called **belongsTo**.

## One-to-Many Relationships

It is used when entry in one database table can have **many** related entries in another table.

we will use the same **belongsTo**, which we already know from one-to-one relationship.

```php
class Book extends Model
{
    function author() {
        return $this->belongsTo('App\Author');
    }
}
```

### hasMany function

Inverted function of a **belongsTo()** is called **hasMany()** and is defined in the parent’s model.

In our case, **Author** model would look like this:

```php
class Author extends Model
{
    function books() {
        return $this->hasMany('App\Book');
    }
}
```


[Reference](https://blog.quickadminpanel.com/eloquent-relationships-the-ultimate-guide/)

---

# Attaching, syncing, detaching related records


## Attaching

The `attach` method is primarily used in many-to-many relationships to add records to the pivot table that connects two models.

```php
$role = Role::find(1);  
$user->roles()->attach($role->id);
```

## Syncing

The `sync` method is a powerful way to synchronize the records in a many-to-many relationship. It takes an array of related model IDs as its argument and ensures that the pivot table contains only those records.

```php
$roleIds = [1, 2, 3];  
$user->roles()->sync($roleIds);
```

## 

the `detach` method allows we to remove records from a many-to-many relationship's pivot table.

```php
$role = Role::find(1);  
$user->roles()->detach($role->id);
```

[Reference](https://medium.com/@rajvir.ahmed.shuvo/understanding-sync-attach-and-detach-in-laravel-managing-relationships-with-eloquent-394a7cf7fabd)

---

# The N+1 Problem In Laravel

The N+1 query problem occurs when an application makes one initial query to the database followed by an additional query for each result obtained from the first query. This typically happens in object-relational mapping (ORM) frameworks when dealing with relationships between models.

```php
$posts = Post::all();
foreach ($posts as $post) {
    $comments = $post->comments; // Additional query for each post
}
```

[Reference](https://loadforge.com/guides/optimizing-laravel-applications-by-detecting-n1-queries)

---
