#This is my first application development
1. Download composer
    `https://getcomposer.org/download/`
    * during installation use the php.exe form xampp folder
2. Restart the vscode
3. run the folllowing command in xampp/htdocs:
    `composer create-project laravel/laravel <name of the app>`
4. wait until it finishes

5. now let's setup local env:
    * setup the server response
    `xampp\apache\conf'extra httpd-vhost.conf`
    * then add this to hosts  
    `C:\Windows\System32\drivers\etc\hosts`  
    whatever is there at the very bottom  

6. restart server on xampp
that's it. very nice trick done...  

#Setting the stuff up
1. Here is the main initial route
    `D:\xampp\htdocs\epicapplication\routes\web.php`

2. creating a controller
```
php artisan make:controller PagesController  

D:\xampp\htdocs\epicapplication\app\Http\Controllers\PagesController.php
```
3. then comes the layout to be extended

4. some routing and styling and NPM!!!
https://nodejs.org/en/ has to be downloaded to run npm install  
`zip versions are also available`  
`npm run dev` command will re-complile compliled code from SAAS!  
`npm run prod` will compile everything
D:\xampp\htdocs\epicapplication\resources\assets\sass\_variables.scss  
```
CTRL+F5 clears the cache in the chrome page
```
https://getbootstrap.com  
getting started

somehow it didn't work so I stole components from his site

5. ... stopped here