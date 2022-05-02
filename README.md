## SETUP INSTRUCTIONS

* run "composer install"
* run "npm install"
* Create a database
* Create .env file with your own settings
* run "php artisan key:generate"
* run "php artisan migrate"
* run "sudo chown ubuntu:www-data bootstrap storage -R"
* run "sudo chmod 775 bootstrap storage -R"
* run "php artisan daily:insert" 
This last command is for adding data from binance API.

