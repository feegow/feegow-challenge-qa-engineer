# API Feegow Challenge QA Engineer
## _Instruções para Execução da API de testes_

![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white) ![SQLite](https://img.shields.io/badge/sqlite-%2307405e.svg?style=for-the-badge&logo=sqlite&logoColor=white) ![macOS](https://img.shields.io/badge/mac%20os-000000?style=for-the-badge&logo=macos&logoColor=F0F0F0) ![Ubuntu](https://img.shields.io/badge/Ubuntu-E95420?style=for-the-badge&logo=ubuntu&logoColor=white)

#### Pré requisitos

Clone deste desafio e acessar pasta api

```shell
git clone git@github.com:feegow/feegow-challenge-qa-engineer.git
cd feegow-challenge-qa-engineer.git/api
```

Instalação do make

```shell
sudo apt update
sudo apt install make
```

Execução

```shell
make up
make install
make mig
```

#### Comandos disponíveis para o make

| Comando | Descrição |
| ------ | ------ |
| make up | Levantar o ambiente de desenvolvimento |
| make install | Instalar dependências |
| make mig | Executa as migrations, recria o banco e executa seeders |
| make appointment | Insere um novo agendamento |
| make down | Para o ambiente de desenvolvimento |

Exemplo de inserção de novo agendamento

Via Make

``` shell
 make appointment doctor_id=1 patient_id=1 date="2024-11-06 10:00:00" status="pending"
```

Via Curl

 ``` shell
 curl -X POST http://localhost:8080/api/appointments \
	-H "Content-Type: application/json" \
	-d '{"doctor_id": "$(doctor_id)", "patient_id": "$(patient_id)", "appointment_date": "$(date)", "status": "$(status)"}'
```
