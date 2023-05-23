# Simple PHP Router

This is a simple PHP router script that allows you to define routes and map them to corresponding PHP functions. The router is implemented using pure PHP and does not require any external dependencies.

## Installation

1.  Download the `Route.php` file and place it in your project directory.
2.  Create a new PHP file (e.g., `index.php`) and include the `router.php` file using the `require_once` statement.

```php
<?php
    require_once 'router.php';
?>
```

## Usage

### Initializing the Router

To start using the router, you need to initialize an instance of the `Route` class. This can be done by creating a new `Route` object and passing the base URL as a parameter.

```php
$route = new Route('');
```

### Adding Routes

You can define routes using the `add` method of the `Route` object. Each route requires a URL pattern, a PHP function name, and an HTTP method.

```php
$route->add('/home', 'home', 'GET');
$route->add('/contact', 'contact_us', 'GET');
$route->add('/contact', 'contact_us', 'POST');
$route->add('/about', 'about', 'GET');
$route->add('/portfolio', 'portfolio', 'GET');
$route->add('/404', 'notfound', 'GET');
```
In the example above, six routes are defined. The first parameter is the URL pattern, the second parameter is the PHP function that will handle the request for that route, and the third parameter is the HTTP method for which the route should be triggered.

### Handling Requests

Once you have defined your routes, you can submit the request to the router using the `submit` method. This will match the requested URL and method with the defined routes and call the corresponding PHP function.

```php
$route->submit();
```
Make sure to include this line at the end of your PHP file to initiate the routing process.

### Example PHP Functions

You need to create the PHP functions that correspond to the routes you defined. These functions should be defined in a separate `functions.php` file and included at the beginning of your PHP file.

Here's an example of how you can define PHP functions for the routes mentioned above:

```php
// functions.php

function home() {
    // Handle the 'home' route (GET)
    echo "Welcome to the home page!";
}

function contact_us() {
    // Handle the 'contact' route
    echo "Welcome to the contact page!";
}

function about() {
    // Handle the 'about' route (GET)
    echo "About us page";
}

function portfolio() {
    // Handle the 'portfolio' route (GET)
    echo "Portfolio page";
}

function notfound() {
    // Handle the '404' route (GET)
    echo "Page not found";
}` 
```

Ensure that the `functions.php` file is required at the beginning of your PHP file.

## License

This project is licensed under the [MIT license](https://chat.openai.com/LICENSE).

Feel free to modify and extend the router according to your project's requirements.