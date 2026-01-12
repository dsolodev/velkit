# Velkit

<p>
    <a href="https://github.com/dsolodev/velkit/actions"><img src="https://github.com/dsolodev/velkit/actions/workflows/tests.yml/badge.svg" alt="Build Status"></a>
    <a href="https://packagist.org/packages/dsolodev/velkit"><img src="https://img.shields.io/packagist/dt/dsolodev/velkit" alt="Total Downloads"></a>
    <a href="https://packagist.org/packages/dsolodev/velkit"><img src="https://img.shields.io/packagist/v/dsolodev/velkit" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/dsolodev/velkit"><img src="https://img.shields.io/packagist/l/dsolodev/velkit" alt="License"></a>
</p>

**Velkit** is an opinionated starter kit for [Laravel](https://laravel.com) with [Filament](https://filamentphp.com/).

## ✨ Features

- ✅ **Filament 4.1** admin panel pre-configured
- ✅ **Log Viewer** (opcodesio/log-viewer)
- ✅ **Rector**, **Pint**, **Prettier** for automated code quality
- ✅ **PHPStan Level Max** (maximum strictness)
- ✅ **100% Type Coverage** with Pest

## 📋 Prerequisites

Before installing Velkit, ensure you have:

- **[PHP 8.4+](https://php.net/releases/)**
- **[Laravel Installer](https://laravel.com/docs/installation#creating-a-laravel-project)** (recommended)

### Installing Laravel Installer

If you haven't installed the Laravel Installer yet:

```bash
composer global require laravel/installer
```

Make sure Composer's global bin directory is in your PATH.

## 🚀 Installation

### Quick Start with Laravel Installer

You can use the [Laravel Installer](https://laravel.com/docs#installing-php) to install this starter kit.

```bash
laravel new my-app --using=dsolodev/velkit
cd my-app
```

### Alternative: Using Composer

```bash
composer create-project dsolodev/velkit --prefer-dist example-app
cd my-app
```

---

## 🛠️ Development Tools

### Available Commands

```bash
# Development
composer dev                    # Start development server with hot reloading, queue worker, and log monitoring

# Code quality
composer lint                   # Auto-fix code style issues and refactoring with Pint, Rector, Prettier
composer test:lint              # Check code style issue and refactoring (dry-run) for CI/CD pipeline

# Testing
composer test:type-coverage     # Check type coverage using Pest
composer test:types             # Run PHPStan analysis at max level
composer test                   # Run full test suite

# Maintenance
composer update:requirements    # Update all PHP and NPM dependencies to the latest versions
```

### Pre-configured Tools

- **[Pint](https://laravel.com/docs/pint)** - Code style fixer (PSR-12 + Laravel)
- **[Rector](https://getrector.com/)** - Automated refactoring
- **[Pest](https://pestphp.com/)** - Testing framework
- **[Prettier](https://prettier.io/)** - JS/CSS formatter
- **[Larastan](https://github.com/larastan/larastan)** - PHPStan for Laravel
- **[Laravel Boost](https://laravel.com/docs/boost)** - Laravel AI Agent Starter Kit

## 📖 Resources

### Official Documentation

- [Laravel Documentation](https://laravel.com/docs)
- [Filament Documentation](https://filamentphp.com/docs)
- [PHPStan Documentation](https://phpstan.org/user-guide/getting-started)
- [Rector Documentation](https://getrector.com/documentation)
- [Pest Documentation](https://pestphp.com/docs)

### Packages Used

- **[laravel/framework](https://github.com/laravel/framework)** - The Laravel Framework
- **[filament/filament](https://github.com/filamentphp/filament)** - Admin panel
- **[opcodesio/log-viewer](https://github.com/opcodesio/log-viewer)** - Log viewer
- **[larastan/larastan](https://github.com/larastan/larastan)** - PHPStan for Laravel
- **[pestphp/pest](https://github.com/pestphp/pest)** - Testing framework
- **[driftingly/rector-laravel](https://github.com/driftingly/rector-laravel)** - Automated refactoring for Laravel
- **[laravel/boost](https://laravel.com/docs/boost)** - Dependency management (dev)

## 📝 License

Velkit is open-sourced software licensed under the [MIT license](LICENSE).

## 👤 Author

**Created by:** dsolodev  
**GitHub:** [@dsolodev](https://github.com/dsolodev)  
**Repository:** [dsolodev/velkit](https://github.com/dsolodev/velkit)

---
