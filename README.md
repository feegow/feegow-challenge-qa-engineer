# QA Engineer Technical Challenge

## Descrição

Bem-vindo ao desafio técnico para a vaga de QA Engineer! Este teste é projetado para avaliar suas habilidades em automação de testes, documentação de bugs, criação de cenários de teste e integração com DevOps.

Para realizar o desafio, você precisará completar as etapas descritas abaixo, enviando o código e a documentação neste repositório.

## Objetivo

O objetivo deste desafio é avaliar:
- Capacidade de identificar e descrever cenários de teste críticos.
- Habilidades em automação de testes end-to-end.
- Competências na documentação de bugs e comunicação com times técnicos.
- Entendimento sobre integração de QA com pipelines CI/CD.

## Requisitos Técnicos

- **Linguagens**: PHP, Python, JavaScript ou TypeScript.
- **Frameworks de Automação**: [Playwright](https://playwright.dev/) ou [Robot Framework](https://robotframework.org/).
- **Controle de Versão**: Git.
- **Pipeline CI/CD**: Familiaridade com GitHub Action ou Jenkins é um diferencial.

---

## Desafio

### Etapa 1: Definição de Testes e Critérios de Qualidade

**Descrição da Tarefa**:
- Crie uma documentação que contenha os cenários de teste principais para o fluxo de agendamento de consultas.
- Use uma **matriz de risco (probabilidade vs. impacto)** para priorizar os cenários de teste. Considere a probabilidade de um defeito ocorrer em cada cenário e o impacto que ele teria no sistema.
  - **Probabilidade**: Qual a chance de esse problema ocorrer no uso do sistema?
  - **Impacto**: Qual o impacto no sistema ou na experiência do usuário caso o problema ocorra?

**Contexto do Sistema**:
Imagine um sistema de agendamento de consultas para clínicas e profissionais de saúde com os seguintes requisitos básicos:
  - Usuários podem agendar consultas em horários disponíveis.
  - Consultas podem ser canceladas.
  - Somente horários válidos e disponíveis devem ser apresentados para o agendamento.
  - O sistema deve lidar com tentativas de agendamento em horários já ocupados de forma apropriada.
  
**Exemplos de Cenários para Avaliação**:
  - Agendamento de uma nova consulta para um horário disponível.
  - Cancelamento de uma consulta existente.
  - Exibição correta de horários disponíveis.
  - Tentativa de agendamento em um horário já ocupado.
  - Restrição de cancelamento de consulta criada recentemente.

**Matriz de Risco (Exemplo)**:
Abaixo está um exemplo de matriz de risco para guiar sua análise de priorização. Use uma estrutura semelhante para avaliar os casos de teste propostos.

| ID   | Caso de Teste                            | Probabilidade (1-5) | Impacto (1-5) | Nível de Risco (P x I) | Prioridade |
|------|------------------------------------------|----------------------|---------------|-------------------------|------------|
| TC01 | Agendar uma nova consulta                | 3                    | 5             | 15                      | Alta       |
| TC02 | Cancelar uma consulta recém-criada       | 2                    | 4             | 8                       | Média      |
| TC03 | Verificar horários disponíveis           | 4                    | 3             | 12                      | Alta       |
| TC04 | Tentar agendar em horário ocupado        | 5                    | 2             | 10                      | Média      |
| TC05 | Restrição de cancelamento recente        | 2                    | 3             | 6                       | Baixa      |

> **Notas**: Na matriz acima, uma pontuação mais alta indica uma prioridade maior para o teste. **Probabilidade** varia de 1 (baixa chance de ocorrer) a 5 (alta chance), e **Impacto** varia de 1 (impacto baixo) a 5 (impacto alto).

**Entrega**:
- Crie a documentação no diretório `/1.documentation`, incluindo a matriz de risco e a justificativa para a priorização.
- Use um formato de arquivo de sua escolha (Markdown ou PDF).

**Critérios de Avaliação**:
1. Cobertura dos cenários de teste.
2. Clareza e organização da documentação.
3. Justificativa para os tipos de teste sugeridos.
4. Uso eficaz da matriz de risco para priorização.

---

### Etapa 2: Implementação de Testes Automatizados

**Descrição da Tarefa**:
- Implemente uma automação de teste end-to-end para a funcionalidade de agendamento e cancelamento de consultas em um sistema fictício de clínicas e profissionais de saúde.
- A funcionalidade a ser testada inclui:
  - Agendar uma nova consulta em um horário disponível.
  - Cancelar a consulta recém-agendada e confirmar o cancelamento.
- Você pode escolher qualquer framework de automação end-to-end, como [Playwright](https://playwright.dev/) ou [Robot Framework](https://robotframework.org/).

**Contexto do Sistema**:
Imagine que estamos testando a página de agendamento de consultas de uma clínica. O sistema permite que o usuário:
- Selecione um horário disponível para uma consulta.
- Confirme o agendamento.
- Visualize a consulta agendada em uma lista.
- Cancele uma consulta existente.

Para este exercício, vamos supor que:
- A URL para o agendamento é `https://minhaclinica.com/agendamento`.
- O horário de consulta pode ser selecionado em uma lista suspensa.
- Um botão de "Agendar" e um botão de "Cancelar" estão disponíveis para realizar as operações.

**Entrega**:
- Adicione o código dos testes no diretório `/2.automation-tests`.
- Inclua um arquivo `README.md` dentro da pasta `/2.automation-tests` com instruções para rodar os testes (ex.: instalação de dependências e comandos para execução).

**Critérios de Avaliação**:
1. Cobertura do fluxo solicitado.
2. Qualidade e organização do código.
3. Configuração de execução dos testes no CI/CD (opcional, mas diferencial).


---

### Etapa 3: Simulação de um Problema Técnico

**Descrição da Tarefa**:
- Documente um bug fictício que ocorre no sistema de agendamento de consultas. Neste caso específico, o problema é o seguinte:
  - O sistema não permite o cancelamento de uma consulta se ela foi criada nos últimos 5 minutos.
- Sua tarefa é descrever o bug, detalhando o impacto na experiência do usuário, os passos para reprodução, e os critérios de aceitação para a correção.

**Contexto do Problema**:
Imagine que usuários do sistema estão enfrentando dificuldades ao tentar cancelar consultas recém-criadas. Esse problema impede que o cancelamento ocorra quando o usuário tenta fazê-lo imediatamente após o agendamento, o que pode causar frustração e gerar confusão sobre a funcionalidade de cancelamento.

Para completar esta tarefa, forneça uma análise detalhada, incluindo o contexto do impacto no usuário final e as etapas específicas para reproduzir o bug. Além disso, defina claramente os critérios de aceitação, ajudando a equipe de desenvolvimento a compreender as condições esperadas para a correção.

**Modelo de Bug Report**:
Um modelo de bug report está disponível no diretório `/3.bug-report` (`bug_report_template.md`). Utilize esse modelo para estruturar sua documentação de forma clara e completa.

**Entrega**:
- Crie o relatório de bug no diretório `/3.bug-report`, preenchendo o modelo fornecido.
- Salve o documento em formato Markdown ou PDF.

**Critérios de Avaliação**:
1. Clareza e detalhamento do relatório de bug.
2. Precisão nos passos para reprodução do problema.
3. Definição clara dos critérios de aceitação.
4. Capacidade de comunicação e descrição do impacto no usuário.


---

### Etapa 4: Interação com Times DevOps e Produto

**Descrição da Tarefa**:
- Para esta etapa, queremos entender como você integraria o processo de QA em uma pipeline de CI/CD e como colaboraria com os times de Produto e DevOps para garantir critérios de aceitação e definição de pronto ("definition of done") claros.
- Explique como você configuraria testes automatizados em cada etapa da pipeline de CI/CD e como garantiria que os critérios de qualidade fossem cumpridos em cada versão do sistema.

**Contexto da Tarefa**:
Imagine que você faz parte de um time DevOps onde o QA deve estar completamente integrado ao ciclo de desenvolvimento e deployment. O objetivo é construir uma pipeline que ofereça feedback contínuo sobre a qualidade do sistema, com testes automatizados e práticas colaborativas que garantam a estabilidade e confiabilidade das versões.

Para auxiliar na estruturação de sua resposta, preparamos um questionário com as principais questões sobre o tema. Você pode encontrar o questionário no diretório `/4.assessment` em formato Markdown (`assessment_questions.md`). Siga as questões do questionário para fornecer uma visão completa sobre como você implementaria e sustentaria o processo de QA em um ambiente DevOps.

**Entrega**:
- Responda ao questionário no diretório `/4.assessment`, preenchendo o arquivo `assessment_questions.md` com suas respostas.
- Salve o documento em formato Markdown.

**Critérios de Avaliação**:
1. Clareza e completude das respostas no questionário.
2. Compreensão do processo de integração de QA em CI/CD.
3. Habilidade para definir critérios de aceitação e de pronto ("definition of done") com o time.
4. Práticas de colaboração e alinhamento entre os times de Produto, DevOps e QA.

---

## Orientações para uso da API de teste.

As orientações para API de teste encontran-se [neste documento](./api/README.md)

## Orientações Gerais

- **Prazo**: Este teste deve ser concluído em até 5 dias após o recebimento.
- **Dúvidas**: Caso tenha alguma dúvida sobre o desafio, entre em contato com o responsável por este processo seletivo.

## Como Enviar o Desafio

1. Realize um fork deste repositório para o seu perfil do GitHub.
2. Faça commits das suas alterações conforme necessário.
3. Ao finalizar, envie o link do seu repositório para o responsável pelo processo seletivo.

---

## Pontos Extras

- Configuração de execução de testes em pipeline CI/CD (ex.: GitHub Actions, Jenkins).
- Qualquer sugestão de melhoria para o fluxo ou automação de QA.

Boa sorte! Estamos ansiosos para ver sua abordagem!
