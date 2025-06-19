# 🛒 Laravel E-Commerce Platform

E-commerce application built with **Laravel 12**, **Filament 3**, **Livewire 3**, **Tailwind CSS 4**, and **Preline UI** components.

## 🚀 Features

### 👥 Frontend (Customer)

- Browse and filter products
- Product details view
- Add to cart
- Update cart quantity
- Checkout flow (order summary, shipping info, confirmation)
- Register/login (with email)
- Order history for logged-in users

### 🔧 Admin Panel (Filament)

- Product management (CRUD)
- Category and subcategory management
- Order management
- User management
- Dashboard with stats (optional: revenue, orders, inventory)
- Media management (optional: using Filament's Spatie Media Library plugin)

### 🎨 UI/UX

- Built with **Tailwind CSS 4**
- Uses **Preline UI** for clean, responsive UI components
- Livewire 3 for dynamic interfaces (without full-page reloads)

---

## 🛠 Tech Stack

| Layer      | Tool                |
|------------|---------------------|
| Framework  | Laravel 12          |
| Admin      | Filament 3          |
| Interactivity | Livewire 3       |
| Styling    | Tailwind CSS 4      |
| UI Kit     | Preline UI          |
| Auth       | Laravel Breeze or Fortify (configurable) |

---

## 📦 Installation

```bash
git clone https://github.com/your-username/your-laravel-ecommerce.git
cd your-laravel-ecommerce

composer install
npm install && npm run dev

cp .env.example .env
php artisan key:generate

# Configure your DB connection in .env

php artisan migrate --seed

php artisan serve
