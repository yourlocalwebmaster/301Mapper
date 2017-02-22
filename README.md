# Installation
Include the Php301Mapper class to your header file.
Add the following to the top of your 404 loader page.

```
$redirects = [
    '/index.php?page1OLD' => '/index.php?page1NEW',
    '/index.php?page2OLD' => '/index.php?page2NEW',
    '/index.php?page3OLD' => '/index.php?page2NEW',
];

MapFactory::Mapper($_SERVER['REQUEST_URI'],$redirects)->run();
```

# Dev Installation  
`composer install`