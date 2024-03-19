# Adapter

É um padrão de projeto estrutural que permite que interfaces incompatíveis trabalhem juntas. Ele é útil quando você tem duas classes com interfaces incompatíveis, mas deseja que elas trabalhem juntas sem modificar o código-fonte original de nenhuma das classes.

### Componentes do padrão Adapter:

1. **Cliente**: É a classe que interage com a interface do Adaptador.

2. **Adaptador (Adapter)**: É uma classe que faz a ponte entre a interface do cliente e a interface do serviço. Ele implementa a interface desejada pelo cliente e encapsula uma instância do objeto adaptado.

3. **Objeto Adaptado (Adaptee)**: É a classe que possui a interface incompatível que precisa ser adaptada para ser compatível com a interface do cliente.

### Exemplo de Implementação:

Suponha que você tem em sua casa uma tomada com 2 pinos `LegacySocket`, mas você precisa adaptar uma tomada com 3 pinos `TreePinSocket` para que ela também possa ser usada.  

Como resolver esse problema?

A classe `TreePinSocketAdapter` atua como um adaptador entre `TreePinSocket` e `LegacySocket`, permitindo que uma instância de `TreePinSocket` seja usada onde um `LegacySocket` é esperado. Isso demonstra o uso prático do padrão Adapter para interoperabilidade entre classes com interfaces incompatíveis.