## Screenshots

Here are some screenshots of the system design:

![Screenshot](SystemDesign\screenshot\1.png)
![Screenshot](SystemDesign\screenshot\2.png)

# Pharmacy Management System


## Overview

PharmStream is a comprehensive Pharmacy Management System built using **Laravel**, **MySQL**, and **Bootstrap**. This system is designed to streamline pharmacy operations, allowing for efficient management of suppliers, categories, purchases, products, user roles, and permissions. Its user-friendly interface ensures that pharmacy staff can easily navigate through various functionalities, enhancing productivity and accuracy in managing pharmaceutical inventories.

## Features

-   **Supplier Management**: Easily manage supplier information and track supply orders.
-   **Category Management**: Organize products into categories for better inventory control.
-   **Purchase Management**: Record and manage all purchases made from suppliers.
-   **Product Management**: Add, update, and delete products from the inventory with ease.
-   **User Management**: Handle user accounts and their respective roles within the system.
-   **Role and Permission Management**: Define roles for users and set permissions to ensure secure access to sensitive functionalities.

## Installation (continued)

1. **Clone the repository**:

    ```bash
    git clone https://github.com/diusazzad/PharmStream.git
    ```

2. **Navigate to the project directory**:

    ```bash
    cd PharmStream
    ```

3. **Install dependencies**:
   Ensure you have Composer installed, then run:

    ```bash
    composer install
    ```

4. **Set up the environment file**:

    ```bash
    Copy the .env.example file to .env:
    bash
    cp .env.example .env
    ```

5. **Generate an application key**:
   Run the following command to generate a unique application key:

    ```bash
    php artisan key:generate
    ```

6. **Configure your database**:
   Open the .env file in a text editor and update it with your database credentials:

    ```bash
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=your_database_name
        DB_USERNAME=your_username
        DB_PASSWORD=your_password
    ```

7. **Run migrations**:

    ```bash
         Execute the following command to create the necessary tables in your database:
         php artisan migrate
    ```

8. **Start the local development server\***:
   Run this command to start your application locally:

    ```bash
    php artisan serve
    ```

    Access the application at http://localhost:8000.
