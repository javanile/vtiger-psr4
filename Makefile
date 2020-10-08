
.PHONY: test

init:
	echo "version=7.1.0" > .env

install-composer:
	docker-compose run --rm vtiger curl -sS https://getcomposer.org/installer -o ./scripts/composer-installer.php
	docker-compose run --rm vtiger php ./script/composer-installer.php -- --install-dir=./scripts --filename=composer

install: init
	docker-compose run --rm vtiger php ./script/composer install

update:
	docker-compose run --rm vtiger php ./script/composer update $(take)

require:
	docker-compose run --rm vtiger php ./script/composer require $(take)

dump-autoload:
	docker-compose run --rm vtiger php ./script/composer dump-autoload

update-readme:
	docker-compose run --rm vtiger php ./script/update-readme.php

up:
	docker-compose up -d

release: update-readme
	git add .
	git commit -am "release"
	git push

## -------
## Testing
## -------
test:
	bash script/test-runner.sh

test-dev:
	docker-compose run --rm vtiger ./vendor/bin/phpunit tests

tdd: up
	docker-compose run --rm vtiger ./vendor/bin/phpunit --stop-on-failure --filter $(class)::$(method)
