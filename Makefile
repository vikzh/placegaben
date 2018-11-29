serve:
		    php -S localhost:8000 -t public
make lint:
		    composer run-script phpcs -- --standard=PSR12 app bootstrap public routes
test:
		    composer run-script phpunit
install:
		    composer install