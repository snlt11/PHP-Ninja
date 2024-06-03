# PHP Ninja Student Management System

This is a simple PHP application built using the Laravel framework that demonstrates CRUD operations for managing student records. The application uses MySQL as the database.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)

## Features

- Create, read, update, and delete student records.

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/snlt11/php-ninja.git
   ```

2. Navigate to the project directory:
   ```bash
   cd php-ninja
   ```

3. Install Composer dependencies:
   ```bash
   composer install
   ```
   
4. Install Composer illuminate/database:
   ```bash
   composer require illuminate/database
   ```

5. Start the development server:
   ```bash
   php -S localhost:8000
   ```

## Usage

Once the application is running, you can access it in your browser at http://localhost:8000.

To create a new student record, click on the "Create New Student" button and fill out the form.

To view, edit, or delete a student record, click on the "Details" button next to the corresponding student in the list.
