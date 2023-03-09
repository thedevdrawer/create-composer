# Create You Own Composer with DevDrawer

Learn how to create your own composer project to quickly reuse or release your code. In this tutorial, we will go over creating a composer project, creating a GitHub repo for it, and publishing it to Packagist.

## License

[OSL - Open Software Licence 3.0](http://opensource.org/licenses/osl-3.0.php)

## Sample Code

Add the following code to your php file and you should see the ClassName output of "Hello World".

```php
<?php

require_once 'vendor/autoload.php';

new \DevDrawer\Tutorial\ClassName();

```

To run your tests, make sure you have phpunit installed or run composer install. I have added a composer phpunit to this project so you can test it with only these files.

```
composer require phpunit/phpunit
```

```
php vendor/phpunit/phpunit/phpunit tests/ClassNameTest.php
```
