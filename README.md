# 🚀 Premium Laravel 12 Starter Kit

A strict, opinionated, and production-ready boilerplate for modern Laravel projects. Built with 2025 best practices, strict types, comprehensive testing, and PostgreSQL.

## 🛠 Tech Stack

- **Framework:** Laravel 12.44.0
- **Language:** PHP 8.5.1 (with strict types everywhere)
- **Frontend:** Livewire 3 + Jetstream 5 + Tailwind CSS
- **Database:** PostgreSQL 16 (Docker)
- **Search:** Laravel Scout (Database Driver)
- **Testing:** Pest PHP 3 + Architecture Tests
- **Static Analysis:** Larastan (PHPStan Level 9)
- **Code Style:** Laravel Pint
- **Auth:** Laravel Fortify + Sanctum
- **CI/CD:** GitHub Actions

## ✨ Features

- ✅ **Strict Types:** `declare(strict_types=1)` in all PHP files
- ✅ **PHPStan Level 9:** Zero errors, maximum type safety
- ✅ **Architecture Tests:** Enforced coding standards with Pest
- ✅ **PostgreSQL 16:** Full-text search extensions (`pg_trgm`, `unaccent`)
- ✅ **Docker Ready:** One command to start PostgreSQL
- ✅ **Laravel Scout:** Database-driven search (no external services)
- ✅ **IDE Support:** Auto-generated helper files for autocomplete
- ✅ **CI Pipeline:** Automated testing, linting, and analysis
- ✅ **Modern Auth:** Two-factor authentication, API tokens, profile management

## ⚡️ Quick Start

### Prerequisites

- **PHP 8.4+** (8.5 recommended)
- **Composer 2.x**
- **Node.js 20+** & NPM
- **Docker** (for PostgreSQL)

### Installation

**1. Clone the repository**

```bash
git clone https://github.com/your-username/laravel-premium-starter.git my-new-project
cd my-new-project
```

**2. Install Dependencies**

```bash
composer install
npm install
```

**3. Environment Setup**

```bash
cp .env.example .env
php artisan key:generate
```

**4. Start PostgreSQL (Docker)**

```bash
docker compose up -d postgres
```

This starts PostgreSQL 16 on port **5432** (or 5433 if 5432 is taken) with:
- Database: `laravel`
- Username: `laravel`
- Password: `secret`
- Extensions: `pg_trgm`, `unaccent`

**5. Run Migrations**

```bash
php artisan migrate:fresh
```

**6. Build Frontend Assets**

```bash
npm run build
```

**7. Start Development Server**

```bash
php artisan serve
```

Visit: `http://localhost:8000`

## 🧪 Testing & Quality

### Run Tests

```bash
./vendor/bin/pest                # All tests
./vendor/bin/pest --parallel     # Parallel execution
./vendor/bin/pest tests/Arch.php # Architecture tests only
```

### Code Quality Checks

```bash
./vendor/bin/pint                      # Auto-fix code style
./vendor/bin/pint --test               # Check style (CI mode)
./vendor/bin/phpstan analyse           # Static analysis (Level 9)
```

### IDE Helper

```bash
php artisan ide-helper:generate        # Update autocomplete
php artisan ide-helper:models          # Generate model annotations
```

## 🐳 Docker Services

### Available Services

```bash
docker compose up -d           # Start all services
docker compose up -d postgres  # PostgreSQL only
docker compose up -d redis     # Redis only
docker compose up -d mailpit   # Local email testing
```

### Service Ports

- **PostgreSQL:** 5432 (or `DB_PORT` from .env)
- **Redis:** 6379
- **Mailpit UI:** http://localhost:8025
- **Mailpit SMTP:** 1025

### Stop Services

```bash
docker compose down           # Stop all
docker compose down -v        # Stop and remove volumes
```

## 📦 Updating Dependencies

```bash
composer update
npm update
```

After updates, IDE helpers will auto-regenerate via composer scripts.

## 🔍 Laravel Scout (Search)

This kit uses **database driver** (no Algolia/Meilisearch needed).

### Make Model Searchable

```php
use Laravel\Scout\Searchable;

class Post extends Model
{
    use Searchable;
    
    public function toSearchableArray(): array
    {
        return [
            'title' => $this->title,
            'content' => $this->content,
        ];
    }
}
```

### Search Usage

```php
Post::search('laravel')->get();
```

## 🚀 Deployment

### Production Checklist

- [ ] Set `APP_ENV=production`
- [ ] Set `APP_DEBUG=false`
- [ ] Configure real database credentials
- [ ] Set up Amazon SES for email
- [ ] Run `composer install --optimize-autoloader --no-dev`
- [ ] Run `npm run build`
- [ ] Run `php artisan config:cache`
- [ ] Run `php artisan route:cache`
- [ ] Run `php artisan view:cache`

## 📜 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
