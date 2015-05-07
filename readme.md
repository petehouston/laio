## LAIO: an AIO Laravel template.

This is a basic Laravel application template for quickly bootstraping websites.

### How to use it.

**1.Create a new project using composer.**

```
$ php composer create-project petehouston/laio YOUR_PROJECT_NAME
$ php composer install
```

**2.Provided commands.**

* Spawn a **Seeder** class:

```
$ php artisan spawn:seeder SEEDER_NAME
for example:
$ php artisan spawn:seeder User
```
A **Seeder** class will be generated at `/database/seeds/`.

* Spawn an **Observer** class:

```
$ php artisan spawn:observer OBSERVER_NAME
for example:
$ php artisan spawn:observer User
```

An **Observer** class will be generated at `/app/Observers/`.

* Spawn a **ViewComposer** class:

```
$ php artisan spawn:view.composer VIEWCOMPOSER_NAME
for example:
$ php artisan spawn:view.composer Navbar
```

A **ViewComposer** class will be generated at `/app/Views/Composers/`.

**3. Support helpers functions.**

It's easy. Just create a new `.php` file under `/app/Helpers/`.

A template file `/app/Helpers/helpers.php` is already provided for your references if you don't know how to write helpers properly.

**4. Environment settings**

Checkout the `.env.example.php` for available keys.

### Anything more?

I don't know. I just make this for my personal work.
