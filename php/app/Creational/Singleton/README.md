## SINGLETON

O padrão Singleton é um dos padrões de criação mais simples e amplamente utilizados. Ele garante que uma classe tenha apenas uma instância e fornece um ponto de acesso global para essa instância. Isso é útil quando exatamente um objeto é necessário para coordenar ações em todo o sistema.

### Estrutura do Padrão Singleton:

- **Classe Singleton:** A classe que possui um método para recuperar a única instância de si mesma. Este método geralmente é estático e retorna sempre a mesma instância da classe.

### Funcionamento do Padrão Singleton:

1. **Construtor Privado:** A classe Singleton possui um construtor privado, o que impede a instanciação direta da classe fora dela mesma.

2. **Instância Estática:** A própria classe mantém uma instância estática de si mesma.

3. **Método de Acesso Único:** A classe fornece um método estático que atua como o único ponto de acesso à instância única. Se a instância ainda não foi criada, o método a cria e a retorna. Caso contrário, ele apenas retorna a instância existente.

### Benefícios do Padrão Singleton:

- **Controle sobre a instância:** O Singleton fornece um ponto de acesso global para uma instância única, garantindo que ela seja controlada e acessada de maneira consistente em todo o sistema.

- **Economia de recursos:** Como apenas uma instância da classe é criada e reutilizada, isso economiza recursos de sistema, especialmente útil para classes que são pesadas em termos de recursos.

### Conclusão:

O padrão Singleton é útil em situações em que apenas uma instância de uma classe é necessária em todo o sistema. Ele fornece um ponto de acesso global para essa instância e garante que ela seja criada e acessada de maneira consistente. No entanto, deve-se ter cuidado ao usar o Singleton, pois ele pode introduzir acoplamento em um sistema e dificultar os testes unitários.
