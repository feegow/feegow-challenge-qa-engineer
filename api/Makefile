# Makefile para gerenciamento de comandos do Laravel

# Variáveis
ARTISAN = docker exec -it api-laravel.test-1 php artisan

# Comandos
.PHONY: help mig appointment up down install

help: ## Mostra todos os comandos disponíveis
	@echo "Comandos disponíveis:"
	@echo "  make mig          - Executa as migrations, recria o banco e executa seeders"
	@echo "  make appointment   - Insere um novo agendamento"
	@echo "  make up           - Levanta o ambiente de desenvolvimento"
	@echo "  make down         - Para o ambiente de desenvolvimento"
	@echo "  make install      - Instala as dependências do Composer"

mig: ## Executa as migrations
	$(ARTISAN) migrate:fresh --seed

appointment: ## Insere um novo agendamento
	@echo "Inserindo agendamento..."
	@curl -X POST http://localhost:8080/api/appointments \
	-H "Content-Type: application/json" \
	-d '{"doctor_id": "$(doctor_id)", "patient_id": "$(patient_id)", "appointment_date": "$(date)", "status": "$(status)"}'

up: ## Levanta o ambiente
	@echo "Levantando o ambiente de desenvolvimento..."
	vendor/bin/sail up -d

down: ## Para o ambiente
	@echo "Parando o ambiente de desenvolvimento..."
	vendor/bin/sail down

install: ## Instala as dependências do Composer
	@echo "Instalando dependências do Composer..."
	docker exec -it api-laravel.test-1 composer install
