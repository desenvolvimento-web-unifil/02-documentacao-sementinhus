```mermaid
flowchart LR
    
    User --> Escolher_Jogo
        Escolher_Jogo -.extends.- Iniciar_Jogo
        Escolher_Jogo -.extends.- Consultar_Resultado
    User --> Realizar_Transação
        Realizar_Transação -.extends.- Depositar
        Realizar_Transação -.extends.- Sacar
    User --> Valor_Aposta
    User --> Consultar_Historico
    

    Manager ----> User
    Manager ---> Gerenciar_Transações
    Manager ---> Gerenciar_Valor
    Manager ---> Gerenciar_Contas
    Manager ---> Gerenciar_Jogos
    Manager ---> Gerenciar_Aposta
    
```