# 🚀 Personal Laravel Starter Kit

A strict, opinionated, and modern boilerplate for my future Laravel projects. This kit is pre-configured with my preferred stack, development tools, and code standards.

## 🛠 Tech Stack

- **Framework:** Laravel [Current Version]
- **Language:** PHP 8.2+
- **Frontend:** [Blade / Vue / React - Edit as needed] + Tailwind CSS
- **Testing:** Pest PHP
- **Static Analysis:** PHPStan / Pint

## ✨ Features

- 📦 **Latest Dependencies:** Always maintained on the latest stable Laravel version.
- 🐳 **Docker Ready:** Includes `docker-compose.yml` for instant local development (via Sail).
- 🔒 **Security Hardened:** Pre-configured headers and strict generic type checks.
- 🧹 **Code Quality:** CI workflows for linting (Laravel Pint) and static analysis.

## ⚡️ Quick Start

### Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js & NPM

### Installation

1. **Clone the repository** (or use as template)

```bash
git clone [https://github.com/your-username/your-starter-kit.git](https://github.com/your-username/your-starter-kit.git) my-new-project
cd my-new-project
```

2. **Install Dependencies**

```bash
composer install
npm install

```

3. **Environment Setup**

```bash
cp .env.example .env
php artisan key:generate

```

4. **Database Setup**
   Ensure your database credentials in `.env` are correct, then run:

```bash
php artisan migrate --seed

```

5. **Start Development**

```bash
# Start the backend server
php artisan serve

# Start the frontend build process (in a separate terminal)
npm run dev

```

## 🧪 Testing & Quality

This starter kit enforces high code quality standards.

```bash
# Run the test suite (Pest)
php artisan test

# Fix code style issues automatically
./vendor/bin/pint

# Run static analysis
./vendor/bin/phpstan analyse

```

## 📦 Updating Dependencies

To keep this starter kit fresh, run the following regularly:

```bash
composer update
npm update

```

## 📜 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
