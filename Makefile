install: # зависимости
	composer install
brain-games: # открыть игру
	./bin/brain-games
validate: # composer validate
	composer validate
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
brain-even:
	./bin/brain-even
brain-calc:
	./bin/brain-calc