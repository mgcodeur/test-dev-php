**PHP Dev Test Made with Only Laravel 10**
- [Verify Your Requirements (Very Important)](#verify-your-requirements-very-important)
- [Requirements](#requirements)
- [Installation Steps](#installation-steps)
- [Note](#note)
- [Testing](#testing)
- [Login](#login)

### Verify Your Requirements (Very Important)
To verify the requirements for running this project, follow these steps:
1. Open your terminal.
2. Run the command `php -m` to see the list of activated modules on your PC.

### Requirements
Make sure your system meets the following requirements:
- PHP >= 8.1
- Ctype PHP Extension
- cURL PHP Extension
- DOM PHP Extension
- Fileinfo PHP Extension
- Filter PHP Extension
- Hash PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PCRE PHP Extension
- PDO PHP Extension
- Session PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

### Installation Steps
Follow these steps to install the project:
1. Clone this project.
2. Open your terminal.
3. Run the command `composer update`.
4. Edit your `.env` file in the database section to configure the login credentials for the dashboard.
5. After editing the `.env` file, run the command `php artisan migrate --seed` to migrate the database and seed it with initial data.
6. Install dashboard dependencies by running the `yarn` command.
7. Build frontend assets (for the dashboard only) using the `yarn build` command.
8. After building the assets, run the command `php artisan serve` to start the server.

### Note
- If you are using GuzzleHttp, make sure you have linked the required certificate to your `php.ini` file.

### Testing
To test the project, access the following route: `/dashboard` (You must be logged in to access it).

### Login
Use the following credentials to log in to the dashboard:
- Email: test.user@dev.php
- Password: Password@SuperDev19
