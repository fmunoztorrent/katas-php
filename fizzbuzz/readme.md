#Start Laravel
##Install

#####PHP >= 5.5.9
#####OpenSSL PHP Extension
#####PDO PHP Extension
#####Mbstring PHP Extension
#####Tokenizer PHP Extension

###install [Composer](https://getcomposer.org)
Composer is a tool for dependency management in PHP. It allows you to declare the libraries your project depends on and it will manage (install/update) them for you.
###install [Git](https://git-scm.com)
Git is a free and open source distributed version control system designed to handle everything from small to very large projects with speed and efficiency.


###Clone and update from laravel

open your terminal/git bash here:
```git
git clone https://github.com/laravel-projects/start.git project-name 
```
next open your project folder  
```git
cd project-name 
```
and update your laravel version with composer.json
```git
composer update 
```
##Getting started
Start your Laravel project with default assets
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>@yield('title','Default Project Title')</title> 
    <!-- Fonts --> 
    <!-- Styles --> 
</head>
<body> 
    @yield('content') 
    <!-- JavaScripts --> 
</body>
</html>
```
### Fonts
#### Font Awesome (4.6.3) 
```html
...
    <!-- Fonts -->  
    <link rel="stylesheet" href="{{ asset('assets/default/fonts/font-awesome-4.6.3/css/font-awesome.min.css') }}">
...  
```
find icons [here](http://fontawesome.io/icons/)
#### Ionicons (2.0.1)
```html
...
    <!-- Fonts -->  
    <link rel="stylesheet" href="{{ asset('assets/default/fonts/ionicons-2.0.1/css/ionicons.min.css') }}">
...  
```
find icons [here](http://ionicons.com)
### Css (style)  
#### [bootstrap](http://getbootstrap.com/css/)
```html
...
    <!-- Styles -->  
    <link rel="stylesheet" href="{{ asset('assets/default/css/bootstrap.min.css') }}" >
    ...  
```
#### [bootswatch](https://bootswatch.com)
you can use default css 
```html 
    <!-- Styles -->  
    ...
    <link rel="stylesheet" href="{{ asset('assets/default/css/default.bootstrap.min.css') }}" >
    ...
```
find more bootstarp style like default.bootstrap.min.css from [bootswatch](https://bootswatch.com) 
##### [default.bootstrap.min.css](https://bootswatch.com/default/)
##### [cosmo.bootstrap.min.css](https://bootswatch.com/cosmo/)
##### [lumen.bootstrap.min.css](https://bootswatch.com/lumen/)
##### [paper.bootstrap.min.css](https://bootswatch.com/paper/)
##### [sandstone.bootstrap.min.css](https://bootswatch.com/sandstone/)
##### [united.bootstrap.min.css](https://bootswatch.com/united/)
##### [yeti.bootstrap.min.css](https://bootswatch.com/yeti/)
and add your application style in app.css
```html 
    <!-- Styles -->  
    ...
    <link rel="stylesheet" href="{{ asset('assets/app/css/app.css') }}" >
...  
```
### Javascript 
#### [jquery](https://jquery.com)
```html 
    ...
    <!-- JavaScripts -->
    <script src="{{ asset('assets/default/js/jquery.min.js') }}" ></script> 
   ...  
```
#### [bootstrap](http://getbootstrap.com/javascript/)
```html 
    ...
    <!-- JavaScripts -->
    ...
    <script src="{{ asset('assets/default/js/bootstrap.min.js') }}" ></script> 
...  
```


 
