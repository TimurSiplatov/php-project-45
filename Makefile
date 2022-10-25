install: # зависимости
	composer install
brain-games: # открыть приветствие
	./bin/brain-games
validate: 
	composer validate
lint: # запуск линтера
	composer exec --verbose phpcs -- --standard=PSR12 src bin
brain-even: # игра четное нечетное
	./bin/brain-even
brain-calc: # игра калькулятор
	./bin/brain-calc
brain-gcd: # игра наибольший общий делитель
	./bin/brain-gcd