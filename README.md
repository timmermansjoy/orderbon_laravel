# Orderbon

## prerequisite

This project requires a couple of items to be installed:
- PHP
- Composer
- Node.js
- NPM
- XAMPP or MAMP

## Installation

Clone the Project in a place your Apache server will see it. When this is done. `cd` to the folder. 
Run `composer update` and `npm install`  so all the dependencies get installed.
Next duplicate the `.env_example` file to create a `.env` file and change the settings to your environment.
When this is all done you can run `php artisan migrate --seed` so that the user tables in your database will be created.
Now you can run your server and navigate to the `public` folder of the project


## Compling scss

When you have made changes to the scss you have to run `npm run dev` or `npm run watch` to compile the scss.