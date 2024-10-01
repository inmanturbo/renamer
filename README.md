# Renamer

Renames base namespace in laravel package or app.

## Usage

```bash
composer require inmanturbo/renamer
```

```bash
php artisan rename path/to/basepath --from-vendor-namespace=<from-vendor> --to-vendor-namespace=<to-vendor> --from-app-namespace=<from-app> --to-app-namespace=<to-app> --name=<new-package-name>
```

This will only work if you already have a vendor namespace. For renaming `App` namespace first use [tandem](https://github.com/inmanturbo/tandem).

Unless you started out using [tandem](https://github.com/inmanturbo/tandem) you will likely need to manually edit the `extras.laravel` portion of your composer file.
