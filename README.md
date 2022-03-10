<p align="center">
    <img alt="Domino's Pizza 3d Logo" src="./public/Logo3D.png" width="100" />
</p>
<h1 align="center">
  Domino's Pizza Redesign App
</h1>

## 🧾 Requirements

1.  **PHP** >= 8.1.2
2.  **Composer** >= 2.2.6
3.  **NodeJS** >= 17.5.0
4.  **npm** >= 8.4.1

## 🔱 Reference

-   [Figma Design File](https://www.figma.com/file/YfJdoFida9cy8DoIhMDbLh/Domino-s-Redesign-File)

## 🚀 Quick start

1. **Install depedencies**

    Navigate into your new site’s directory and start it up.

    ```shell
    cd dominos
    composer install
    npm install
    ```

2. **Migrate the database table.**

    ```shell
    php artisan migrate
    ```

3. **Run Seeder.**

    ```shell
    php artisan db:seed --class=MenuSeeder
    php artisan db:seed --class=CategorySeeder
    php artisan db:seed --class=ProductSeeder
    ```

4. **Start developing.**

    ```shell
    php artisan serve
    ```

    Open another shell and run

    ```shell
    npm run develop
    ```

    open on the browser http://localhost:8000/upload to upload products image.

5. **Open the code and start customizing!**

    Your site is now running at http://localhost:8000 !

6. **Change the browser breakpoint**

    > **Note: This website isn't responsive.**

    for better experience change the browser breakpoint with this steps:

    1. **inspect** the website,
    2. toggle the **device emulation** by click **Ctrl+Shift+M**, or click on the top left of devtools,
    3. on the top of website, **change the breakpoint** to **393 x 786** or Pixel 3 XL

    Due to time constraints, we did not add responsive features to this website

7. **Learn more**

    - [Documentation](https://laravel.com/docs)

    - [Simple, fast routing engine](https://laravel.com/docs/routing).

    - [Powerful dependency injection container](https://laravel.com/docs/container).

    - Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.

    - Database agnostic [schema migrations](https://laravel.com/docs/migrations).

    - [Laracasts](https://laracasts.com)
