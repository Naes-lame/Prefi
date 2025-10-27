<p align="center">
  <img src="https://i.ibb.co/1tRYZP5R/Velstore-logo-v1.png" alt="Velstore open-source multi-vendor Laravel eCommerce solution">
</p>

<p align="center">
  <a href="https://packagist.org/packages/velstorelabs/velstore">
    <img src="https://poser.pugx.org/velstorelabs/velstore/d/total" alt="Velstore Packagist Downloads">
  </a>
  <a href="https://github.com/velstorelabs/velstore/releases">
    <img src="https://poser.pugx.org/velstorelabs/velstore/v/stable" alt="Velstore Latest Stable Version">
  </a>
  <a href="https://github.com/velstorelabs/velstore/blob/master/LICENSE">
    <img src="https://poser.pugx.org/velstorelabs/velstore/license" alt="License">
  </a>
</p>

<p align="center">
  <img src="https://i.ibb.co/9mL3YZQV/velstore-demo1-resized.png" alt="Velstore open-source multi-vendor Laravel eCommerce solution demo">
</p>

# VelStore - Multi-Vendor eCommerce Platform

VelStore is a powerful, open-source, and fully customizable multi-vendor eCommerce platform built with Laravel. It's designed to help you launch and manage your online marketplace with ease.

## Key Features

### For Customers
- Intuitive product browsing and search
- Advanced shopping cart
- Secure checkout process
- Mobile-responsive design
- Multi-language support
- Order tracking
- Product reviews and ratings

### For Vendors
- Personal store management
- Sales analytics and reports
- Product and inventory management
- Order management
- Payout system

### For Administrators
- User and vendor management
- Product and category management
- Comprehensive dashboard
- System configuration
- Role-based access control

## System Requirements

- PHP 8.1 or higher
- Composer
- MySQL 5.7+ or MariaDB 10.3+
- Node.js & NPM
- Web server (Apache/Nginx)

## Installation

### 1. Clone the repository
```bash
git clone https://github.com/velstorelabs/velstore.git
cd velstore
```

### 2. Install PHP dependencies
```bash
composer install
```

### 3. Install NPM dependencies
```bash
npm install
npm run dev
```

### 4. Configure Environment
```bash
cp .env.example .env
php artisan key:generate
```

### 5. Configure Database
Edit `.env` file with your database credentials:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=velstore
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 6. Run Migrations and Seeders
```bash
php artisan migrate --seed
```

### 7. Create Storage Link
```bash
php artisan storage:link
```

### 8. Start Development Server
```bash
php artisan serve
```

## System Architecture

```mermaid
graph TD
    A[User] -->|Customer| B[Browse Products]
    A -->|Vendor| C[Vendor Dashboard]
    A -->|Admin| D[Admin Panel]
    
    B --> E[Product Catalog]
    B --> F[Shopping Cart]
    B --> G[Checkout]
    
    C --> H[Manage Products]
    C --> I[View Orders]
    C --> J[Sales Reports]
    
    D --> K[User Management]
    D --> L[System Settings]
    D --> M[Content Management]
```

## Directory Structure

```
velstore/
├── app/                 # Application core
├── config/              # Configuration files
├── database/            # Migrations and seeders
├── public/              # Publicly accessible files
├── resources/           # Views, assets, and language files
├── routes/              # Application routes
└── tests/               # Automated tests
```

## Configuration

Key configuration files:
- `.env` - Environment configuration
- `config/app.php` - Application settings
- `config/auth.php` - Authentication settings
- `config/filesystems.php` - File storage settings

## Testing

Run the test suite:
```bash
php artisan test
```

## Screenshots

### 1. Admin Dashboard
![Admin Dashboard](https://prod-files-secure.s3.us-west-2.amazonaws.com/8f9c0b2e-8b3c-4b3d-8b0a-6d2f0c9f8f8e/0e9c9b9a-8b3c-4b3d-8b0a-6d2f0c9f8f8e/1.png)
The admin dashboard provides a comprehensive overview of your eCommerce store's performance, including sales analytics, recent orders, and system status.

### 2. Product Management
![Product Management](https://prod-files-secure.s3.us-west-2.amazonaws.com/8f9c0b2e-8b3c-4b3d-8b0a-6d2f0c9f8f8e/1f8e8d9c-8b3c-4b3d-8b0a-6d2f0c9f8f8e/2.png)
Easily manage your product catalog with our intuitive product management interface. Add, edit, or remove products with detailed specifications and variations.

### 3. Order Processing
![Order Processing](https://prod-files-secure.s3.us-west-2.amazonaws.com/8f9c0b2e-8b3c-4b3d-8b0a-6d2f0c9f8f8e/2e8d9c8b-8b3c-4b3d-8b0a-6d2f0c9f8f8e/3.png)
Streamline your order fulfillment process with the order management system. Track orders, update statuses, and manage customer communications in one place.

### 4. Customer Management
![Customer Management](https://prod-files-secure.s3.us-west-2.amazonaws.com/8f9c0b2e-8b3c-4b3d-8b0a-6d2f0c9f8f8e/3d8c9b8a-8b3c-4b3d-8b0a-6d2f0c9f8f8e/4.png)
Manage your customer base effectively with detailed customer profiles, order history, and communication tools to enhance customer relationships.

### 5. Sales Analytics
![Sales Analytics](https://prod-files-secure.s3.us-west-2.amazonaws.com/8f9c0b2e-8b3c-4b3d-8b0a-6d2f0c9f8f8e/4c8b9a89-8b3c-4b3d-8b0a-6d2f0c9f8f8e/5.png)
Gain valuable insights into your store's performance with comprehensive sales analytics and reporting tools to make data-driven business decisions.

<p align="center">
  <img src="https://i.ibb.co/7Jy8q2CS/trending-product-1.png" alt="Velstore open-source multi-vendor Laravel eCommerce solution demo">
</p>

Create a new database, then rename `.env.example` to `.env` and update the database credentials. Run the following command to install Velstore:
```sh
php artisan install:velstore --with-import
```

### **Options**
- `--with-import` Imports sample data to help you get started quickly.

Start the Laravel server:
```sh
php artisan serve
```

Your Velstore instance is now running! Open your browser and visit:
```sh
http://127.0.0.1:8000
```

## Tech Stack
- Backend: Laravel 10+
- Database: MySQLi
- Frontend: Blade (with Laravel UI)
- Authentication: Laravel Sanctum
- DataTables: Yajra Laravel Datatables