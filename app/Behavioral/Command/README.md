# COMMAND
O padrão de design Command é um padrão comportamental que visa encapsular uma solicitação como um objeto, permitindo que você parametrize clientes com operações, enfileire solicitações ou registre solicitações, e suporte operações que podem ser desfeitas.

### Estrutura do Padrão Command:

- **Command:** Define uma interface para executar uma ação.
  
- **ConcreteCommand:** Implementa a interface Command e associa-se a um Receiver (Receptor), invocando uma ou mais ações no Receiver.

- **Invoker:** Solicita que a execução de um comando seja realizada.

- **Receiver:** Sabe como executar as operações associadas a uma solicitação. Qualquer classe pode servir como Receptor.

- **Client:** Cria um objeto Command e define o Receiver associado.

### Funcionamento do Padrão Command:

1. O cliente cria um objeto Command e associa-o a um Receiver.

2. O cliente então passa esse objeto Command para um Invoker.

3. O Invoker armazena o objeto Command.

4. Em algum momento, o Invoker solicita que o Command execute sua ação.

5. O Command, por sua vez, chama as operações no Receiver associado.

### Benefícios do Padrão Command:

- **Desacopla o remetente do destinatário:** O cliente que envia um comando não precisa conhecer o objeto que o processará, desacoplando as classes.

- **Suporte para operações desfeitas:** A capacidade de desfazer ações é fácil de implementar usando o padrão Command.

- **Facilita a extensão:** Novos comandos podem ser facilmente adicionados sem alterar o código existente.

### Exemplo de Utilização:

Suponha um controle remoto (RemoteControl) que pode ser associado com comandos para ligar e desligar a luz. O controle remoto pressiona um botão que executa o comando associado. O comando, por sua vez, invoca os métodos turnOn() e turnOff() no receptor, que é a classe Light. Isso demonstra como o padrão Command permite a separação entre a solicitação de uma ação e a sua execução, permitindo maior flexibilidade e extensibilidade no código

### Conclusão:

O padrão de design Command é útil em situações onde há necessidade de desacoplamento entre o objeto que solicita uma ação e o objeto que sabe como executá-la. Ele permite que as solicitações sejam tratadas como objetos, oferecendo flexibilidade, suporte para operações desfeitas e facilitando a extensão do sistema.

## Autor
[Vagner Ribeiro](https://www.linkedin.com/in/vagner-ribeiro/)