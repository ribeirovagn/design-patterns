# Facade
 É um **padrão estrutural** que fornece uma interface unificada para um conjunto de interfaces em um subsistema. Ele define uma interface de nível mais alto que torna o subsistema mais fácil de usar, ocultando a complexidade dos componentes individuais e fornecendo uma única ponto de entrada para interagir com o sistema.

Basicamente, imagine que você tem um sistema complexo com muitos componentes e classes diferentes. Em vez de exigir que os clientes do sistema interajam diretamente com cada uma dessas classes e entender sua complexidade interna, você pode criar uma **fachada** que forneça uma interface simples e unificada para acessar esse sistema.

O **facade** age como um intermediário entre o cliente e o subsistema, encapsulando a lógica necessária para realizar uma tarefa específica. Isso promove a modularidade, facilita a manutenção e reduz a dependência entre o cliente e os componentes internos do sistema.


### A estrutura do padrão Facade envolve as seguintes partes:

1. **Fachada (Facade)**:
   - Define uma interface unificada de nível mais alto para o subsistema.
   - Encapsula a complexidade dos componentes individuais do subsistema.
   - Conhece quais componentes do subsistema são responsáveis por quais funcionalidades.

2. **Componentes do Subsistema**:
   - São as classes e componentes individuais que compõem o subsistema.
   - Realizam tarefas específicas dentro do subsistema.

3. **Cliente**:
   - Utiliza a fachada para interagir com o subsistema.
   - Não precisa conhecer a complexidade interna do subsistema, interagindo apenas com a interface fornecida pela fachada.

A relação entre esses elementos pode ser visualizada da seguinte maneira:

### Estrutura do Padrão Command:

- **Facade**
   - Sabe quais classes de subsistema são responsáveis ​​por uma solicitação.
   - Delega solicitações de clientes aos objetos apropriados do subsistema.

- **Subsystem class**
   - Implementa funcionalidade do subsistema.
   - Lida com o trabalho atribuído pelo objeto **Facade**.
   - Não tem conhecimento da fachada, isto é, eles não mantêm referências.

Nesta estrutura:

- O cliente interage apenas com a fachada, sem precisar conhecer os detalhes do subsistema.
- A fachada atua como um intermediário entre o cliente e o subsistema, chamando os métodos apropriados do subsistema para realizar as operações solicitadas pelo cliente.
- Os componentes individuais do subsistema são encapsulados pela fachada, mantendo sua complexidade oculta do cliente.

## Aplicabilidade

**Use este padrão quando:**

- Desejar fornecer uma interface simples para um subsistema complexo. Os subsistemas geralmente ficam mais complexos à medida que evoluem. A maioria dos padrões, quando aplicados, resulta em classes maiores e menores. Isso torna o subsistema mais reutilizável e fácil de customizar, mas também se torna mais difícil de usar para clientes que não precisam personalizá-lo. Uma fachada pode fornecer uma visão padrão simples do subsistema que seja boa o suficiente para a maioria dos clientes. Somente os clientes que necessitam de mais personalização precisarão olhar além da fachada.

- Existem muitas dependências entre clientes e as classes de implementação de uma abstração. Introduzir uma fachada para dissociar o subsistema dos clientes e de outros subsistemas, promovendo assim a independência e portabilidade do subsistema.

- Desejar colocar seus subsistemas em camadas. Use uma fachada para definir um ponto de entrada para cada nível do subsistema. Se os subsistemas forem dependentes, você poderá simplificar as dependências entre eles, fazendo com que se comuniquem entre si apenas por meio de suas fachadas.

## Autor
[Vagner Ribeiro](https://www.linkedin.com/in/vagner-ribeiro/)