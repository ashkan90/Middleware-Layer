# Basic Implementation of intermediate-layered Middleware
Middleware can be implemented by problem of developer. In this case I implemented it between `Request` and `Controller`.
General purpose of them looks familiar, they want to be checked every request to system because nobody wants to check
some logic on every controller. 

<br><br>So I made a basic implementation of `Middleware` between `Request` and `Controller`. This example contains
very basic concept knowledge if you know exactly what you want to do, you can understand how `Middleware` works.

I didn't implemented PSR-4/0/7 because this's very simple example and i don't want to make somebody stress who started PHP
newly.

You can run this example with:
``
php -S 127.0.0.1:8000
``

I'm not a very professional person on PHP so If there's something that you can teach me drop a Pull Request :)
