# Multi Auth

## Installation

1. Clone the repository:
    ```bash
    git clone <repository-url>
    ```

2. Navigate to the project directory:
    ```bash
    cd lms
    ```

3. Install dependencies:
    ```bash
    composer install
    ```

4. Create a copy of the `.env` file:
    ```bash
    cp .env.example .env
    ```

5. Configure your database in the `.env` file.

6. Run migrations:
    ```bash
    php artisan migrate
    ```

7. Install NPM
    ```bash
    npm install
    ```

8. Serve the application:
    ```bash
    php artisan serve
    ```

9. Run Seeder
    ```bash
    php artisan db:seed
    ```

## Credentials

1. **Admin**
    - email: `admin@mail.com`
    - password: `admin025`

2. **Trainer**
    - email: `trainer@mail.com`
    - password: `trainer025`

3. **Student**
    - email: `student@mail.com`
    - password: `student025`