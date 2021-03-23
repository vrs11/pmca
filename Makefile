include .env

PHP_VER ?= 5.6
PMCA_VER ?= 0.3.1
TAG = $(PHP_VER)-$(PMCA_VER)

REPO = eleventh/pmca
NAME = pmca-5-3

.PHONY: build test push shell run start stop logs clean release

default: build

build:
	@-rm -R $(shell find ./docroot -maxdepth 1 ! -path ./docroot | grep -v "composer.json")
	composer require clickalicious/phpmemadmin:$(PMCA_VER) -d docroot
	docker build -t $(REPO):$(TAG) \
		--build-arg PHP_VER=$(PHP_VER) \
		./

push:
	docker push $(REPO):$(TAG)

shell:
	docker run --rm --name $(NAME) -i -t $(PORTS) $(VOLUMES) $(ENV) $(REPO):$(TAG) /bin/bash

run:
	docker run --rm --name $(NAME) $(PORTS) $(VOLUMES) $(ENV) $(REPO):$(TAG) $(CMD)

start:
	docker run -d --name $(NAME) $(PORTS) $(VOLUMES) $(ENV) $(REPO):$(TAG)

stop:
	docker stop $(NAME)

logs:
	docker logs $(NAME)

clean:
	-docker rm -f $(NAME)

release: build push