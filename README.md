# Laravel Blog Project

## Enhanced Blog Application with API Integration

[Paula's blog-API integration version](https://github.com/pau-prieto/blog-backend-laravel/tree/feature/sanctum-api-endpoints)

**React Frontend**: The frontend for this project is built using React and Typescript. You can find the front repository and setup instructions [here](https://github.com/pau-prieto/blog-app-react).

## Student Information

-   **Name:** Paula Prieto
-   **Student ID:** 220111946
-   **Course:** COSC560 Advanced Web Development
-   **Unit Coordinator:** Muhammad Ibrahim
-   **Assessment:** Assessment 3

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

## API Usage Instructions

The API provides two main endpoints for accessing blog posts.

### Public API Endpoints

These endpoints can be used with any frontend, including the React app.

-   **Get All Posts**:

    -   `GET /api/posts`
    -   _Returns a list of all blog posts in the application._

-   **Get Single Post by ID**:
    -   `GET /api/posts/{id}`
    -   _Returns the details of a single blog post based on its ID._

### Example: Fetch API in React

-   In the React app, you can use the fetch API blog posts from the Laravel API:
    ```javascript
    const API_BASE_URL = "http://localhost:8000/api";
    // Fetch all posts
    fetch(`${API_BASE_URL}/posts`).then((response) => response.json());
    // Fetch a specific post by ID
    fetch(`${API_BASE_URL}/posts/${id}`).then((response) => response.json());
    ```

You can find the frontend React app [here](https://github.com/pau-prieto/blog-app-react) with detailed setup instructions.

## Development Approach

1. **Project Setup**:

    - Created a new branch `feature/sanctum-api-endpoints` to add API functionality from the `feature/auth-admin-panel` branch.

2. **API Development**:

    - Defined new routes in routes/api.php to handle API requests for blog posts:

        ```php
        Route::get('/posts', [PostController::class, 'index']);
        Route::get('/posts/{id}', [PostController::class, 'show']);
        ```

    - Created API controllers to return blog posts in JSON format.

3. Frontend Integration:

    - Integrated the API with the React app using the fetch API.
    - Displayed posts fetched from the API in the React frontend.

### Routes and Controllers

1. **Routes and Controllers**:

    - Defined new API routes in routes/api.php for blog posts (`index` and `show` methods).
    - Updated PostController to handle API requests and return responses in JSON format.

2. **Frontend Fetching**:
    - Used the React app to send requests to the Laravel API and display the results.

### Testing and Debugging

1. Tested API endpoints using Postman and ensured proper responses for all posts and single posts by id.

## Challenges and Difficulties

1. **Fetching Data in React**:

    - Implementing the `fetch` API to request and display posts from the Laravel backend in the React app required some initial adjustments. Once I ensured the API endpoints were correctly set up in `api.php`, the integration worked as expected.

2. **Handling Routes**:
    - I initially faced issues with routing when trying to retrieve individual posts through the `/posts/{id}` endpoint. The problem was resolved by double-checking the route parameters and making sure they matched the `show` method in the `PostController`.
