# My Laravel Blog Project

## Enhanced Blog Application with Authentication and Admin Panel

[Paula's blog-Enhanced version](https://github.com/pau-prieto/blog/tree/feature/auth-admin-panel)

## Student Information

-   **Name:** Paula Prieto
-   **Student ID:** 220111946
-   **Course:** COSC560 Advanced Web Development
-   **Unit Coordinator:** Muhammad Ibrahim
-   **Assessment:** Assessment 2

## Project Setup Instructions

To set up this project, follow these steps:

1. **Clone the Repository**:

    - Clone the repository from GitHub or download files

2. **Install Dependencies and Compile Frontend Assets**:

    - Install all necessary backend dependencies:
        ```bash
        composer install
        ```
    - Install and compile frontend assets:
        ```bash
        npm install
        ```
        ```bash
        npm run dev
        ```

3. **Install MongoDB**:

    - Ensure MongoDB is installed and running on your machine
    - Install PHP extension for MongoDB (for macOS/Linux):
        ```bash
        sudo pecl install mongodb
        ```
    - Install MongoDB Library for Laravel:
        ```bash
        composer require mongodb/laravel-mongodb
        ```

4. **Configure the Database**:

    - Copy the `.env.example` file to `.env`:
        ```bash
        cp .env.example .env
        ```
    - Ensure the `.env` file is configured to use MongoDB

5. **Run Migrations**:

    - Create the necessary database tables by running:
        ```bash
        php artisan migrate
        ```

6. **Seed the Database**:

    - Seed the database with an initial admin user and sample posts:
        ```bash
        php artisan db:seed
        ```
    - Note: The seeded admin user credentials are `admin@example.com` with the password `password`.

7. **Run the Application**:

    - Start the development server:

        ```bash
        php artisan serve
        ```

    - The application will be accessible at `http://127.0.0.1:8000`.

## Usage Instructions

To use this project, follow these steps:

1. **Register a New Author**:

    - Navigate to `http://127.0.0.1:8000/register` to create a new author account.

2. **Log In**:

    - If you seeded an admin, login using the admin credentials (`admin@example.com`, `password`) at `http://127.0.0.1:8000/login`
    - After registering or seeding as an author, you can log in with their credentials.

3. **Author Panel:**

    - Authors can log in using their credentials provided during seeding OR during registration at `http://127.0.0.1:8000/register`.
    - Manage their own posts through the author panel.

4. **Manage Posts**:

    - Use the Manage Posts dashboard to view, create, edit, or delete blog posts. Admins can manage all posts, while authors can only manage their own.
    - Users can create a new post by using the "Create Post" button on the top right corner of the Posts index view.

5. **User Management (Admins Only)**:

    - Admins can view, create, edit, and delete user accounts through the admin panel.
    - Admins can create new users by clicking on the "Create User" button on the top right corner of the User index view.

6. **Middleware**:
    - `AdminMiddleware` allows admins to access the following secure routes:
        - `http://127.0.0.1:8000/admin/dashboard`
        - `http://127.0.0.1:8000/admin/posts`
        - `http://127.0.0.1:8000/admin/users`
        - From there you can access other blade views specific to admins for managing posts and users (i.e., create, show, edit, delete)
    - `AuthorMiddleware` allows admins to access the following secure routes:
        - `http://127.0.0.1:8000/author/dashboard`
        - `http://127.0.0.1:8000/author/posts`
        - From there you can access other blade views specific to author for managing their own posts (i.e., create, show, edit, delete)

## Development Approach

### Setup and Initialisation

1. **Project Setup**: Created a new branch `feature/auth-admin-panel` from the previous assessment’s blog application.
2. **MongoDB Integration**: Configured MongoDB with Laravel for data storage.
3. **Laravel UI and Authentication**:
    - Installed Laravel UI package and set up authentication with Bootstrap.
    - Integrated Bootstrap styling across the application for a consistent look and feel using a Bootstrap [Dashboard template](https://getbootstrap.com/docs/5.3/examples/) example.
4. **Role-Based Access Control and Middleware**:
    - Added roles (admin, author, user) to the user model.
    - Created `AdminMiddleware` and `AuthorMiddleware` to restrict access based on user roles.
    - Applied the middleware to secure admin and author-specific routes.

### Routes, Controllers, and Views

1. **Routes and Controllers**:
    - Defined routes for admin and author operations in `web.php`, ensuring clear separation of concerns.
    - for admin created controllers (`UserController`, `PostController`) to manage users and posts for both admin and author roles.
    - for author created `PostController` to manage only author owned posts.
    - Implemented CRUD operations with validation, ensuring that admins could manage all users and posts, while authors could only manage their own posts.
    - Incorporated role-based access control into the controllers to enforce permissions.
    - Updated routing after registration and login to redirect the user to the correct dashboard depending on their role.
2. **Blade Views**:
    - Developed a unified layout for the admin panel using Bootstrap’s dashboard template, with adaptations for the author panel.
    - Created admin and author dashboards and nav bars.
    - Created admin and author views for listing, showing, creating, editing, and deleting users and blog posts.
    - Updated existing Login and Registration views for consistency with styling and layout.
    - Ensured the design was responsive and user-friendly, maintaining consistency across both admin and author panels.

### Testing and Debugging

1. Thoroughly tested all features, including edge cases like multiple rapid clicks to the like button.
2. Fixed bugs and ensured the application is functional.

## Challenges and Difficulties

1. **Setting Up MongoDB**:
    - Getting MongoDB to work with Laravel took longer than expected. I ran into some connection issues but eventually found the solution after digging through forums.
2. **Role-Based Access Control**:
    - Implementing roles for admins and authors was tricky. I had to carefully ensure that admins had full control, while authors could only manage their own content. There were a lot of steps needed in different places which because confusing but I eventually got there, the request errors from Laravel were helpful.
3. **Password Hashing Mishap**:
    - When working on the user update logic, I struggled with password hashing due to a small validation mistake. It took a while to spot, but once fixed, the everything worked smoothly.
4. **Design Consistency**:
    - Keeping the design consistent across all the blade views was time consuming and challenging. It required balancing different needs of each user while ensuring everything looked cohesive.
5. **Cross-Functionality Bugs**:
    - Adapting features from the admin panel to the author panel led to some unexpected bugs. Sorting these out was a bit stressful, but it improved my debugging skills. Most of the time it was just due to fogetting to update a route somewhere from admin to author.

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
