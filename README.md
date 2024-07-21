# My Laravel Blog Project

## Github Repository

[Paula's blog](https://github.com/pau-prieto/blog)

## Student Information

-   **Name:** Paula Prieto
-   **Student ID:** 220111946
-   **Course:** COSC560 Advanced Web Development
-   **Unit Coordinator:** Muhammad Ibrahim

## Approach

### Initial Setup

1. Installed Laravel and configured the environment.
2. Set up the database and configured the necessary environment variables.
3. Created project on GitHub.

### Develop Core and Bonus Features

1. Defined routes for posts in web.php
2. Created models and migrations for posts table.
3. Created factory and seeder for posts data.
4. Created PostController and implemented CRUD functionality.
5. Implemented master layout and blade views.
6. Implemented the like and unlike functionality with appropriate routes and controller methods.
7. Tested each functionality after each important step.
8. Pushed code to origin using git for each important change.

### User Interface Design

1. Designed the UI using Bootstrap, mostly inline.
2. Ensured all elements were aligned correctly and applied spacing.

### Testing and Debugging

1. Thoroughly tested all features, including edge cases like multiple rapid clicks to the like button.
2. Fixed bugs and ensured the application is functional.

## Project Challenges and Difficulties

While working on the Laravel blog project, I experienced a few challenges.

### 1. Setting up the environment

Setting up the Laravel environment and configuring all dependencies was new to me and I had a few hurdles along the way as the incorrect versions were installed. I also had the incorrect extensions configured and my INI file kept disappearing. I had to configure it took some time but I eventually found a fix for the problem in an online forum.

### 2. Back button behaviour

The back button's behaviour was initially problematic after performing like/unlike actions. Using `history.back()` sometimes required multiple clicks due to page reloads and clicking multiple times gave a 500 network error. I ended up simplifying it to redirect to the index view instead. However, this meant that the edit view was taking the user back to the index and not the post. Eventually it just clicked, I realised I had done a similar behaviour already elsewhere to point to a specific id, and could do the same here.

### 3. Implementing a new feature

The most difficult part was taking everything I had learned and trying to implement it in a new feature. This was the most challenging and time consuming part, but I think it helped me to learn and understand the steps better. However, I don't think I would have been able to implement something more complex. It was more trying to replicate the same functionality with a new feature, and yet it was still challenging. In the end it was worth spending the time trying the bonus feature as I think it helped me to review what I had learned.

## Extra Feature for Bonus Points

### Like/Unlike a Post

I created an extra feature to enhance the functionality of the blog project. I implemented functionality where a user can click a button to like (increments the total number of likes) or unlike (decriments the total number of likes) a blog post. The total number of likes for a post is displayed in the index view and the show view, allowing the user to see the popularity of the posts. Furthermore, the number of posts is saved to the database posts table, where I added a new column called "likes".

This feature is not without its limitations and issues. For example, as there is no authentication in the app as yet, a user is able to like or dislike a post as many times as they want. Additionally, it would be ideal for the same like button to change to "unlike" when a post is already liked and vice versa, instead of having separate like and unlike buttons. However, once authentication is implemented in the future, I may be able to further enhance this feature to limit a user to like/unlike a particular post only once.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[WebReinvent](https://webreinvent.com/)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[DevSquad](https://devsquad.com/hire-laravel-developers)**
-   **[Jump24](https://jump24.co.uk)**
-   **[Redberry](https://redberry.international/laravel/)**
-   **[Active Logic](https://activelogic.com)**
-   **[byte5](https://byte5.de)**
-   **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
