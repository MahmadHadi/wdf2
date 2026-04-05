# Product Management System
```
Mahmadhadi Nayani 
202309050900`39`
Sub: Web Development Framework 
```
A simple Product Management System built with Laravel for Web Development Framework college assignment. This application demonstrates full CRUD operations (Create, Read, Update, Delete) with search functionality and form validation.

## Screen recording
<video controls muted autoplay src="ala2.webm" title="WDF | ALA2"></video>

## Features

- Create Product - Add new products with name, description, price and quantity
- Read Products - View all products in a table format
- Update Product - Edit existing product details with pre-filled forms
- Delete Product - Remove products with confirmation dialog
- Search Functionality - Filter products by name using Eloquent queries
- Form Validation - Server-side validation with error messages

## Technologies Used

- Backend: Laravel 13 (PHP 8.4)
- Database: SQLite
- Frontend: Blade Templates, HTML5, CSS3
- ORM: Eloquent

## Installation

1. Clone the repository
   - git clone https://github.com/MahmadHadi/wdf2
   - cd product-management-system

2. Install dependencies
   - composer install

3. Copy environment file
   - cp .env.example .env

4. Create SQLite database
   - touch database/database.sqlite

5. Update .env file
   - DB_CONNECTION=sqlite

6. Generate application key
   - php artisan key:generate

7. Run migrations
   - php artisan migrate

8. Start the server
   - php artisan serve

9. Open in browser
    - http://127.0.0.1:8000

## Database Schema

- id (primary key)
- name (string)
- description (text, nullable)
- price (decimal 10,2)
- quantity (integer)
- created_at (timestamp)
- updated_at (timestamp)

## Validation Rules

- name: required, string, max 255 characters
- price: required, numeric, minimum 0
- quantity: required, integer, minimum 0
- description: optional, string

## Routes

- GET /products - Display all products
- GET /products/create - Show create form
- POST /products - Store new product
- GET /products/{id} - Show single product
- GET /products/{id}/edit - Show edit form
- PUT /products/{id} - Update product
- DELETE /products/{id} - Delete product

## Author

- Mahmadhadi Nayani 
- GMIU
- Sub: Web Development Framework 

## GitHub Repository

[/mahmadhadi/wdf2](https://github.com/MahmadHadi/wdf2)