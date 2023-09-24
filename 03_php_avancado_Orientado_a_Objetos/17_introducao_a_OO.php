<?php
/*

A orientação a objetos (OO) é um paradigma de programação amplamente utilizado em PHP
e em muitas outras linguagens de programação. Ela oferece uma maneira eficaz de organizar 
e estruturar o código, tornando-o mais modular, reutilizável e mais fácil de entender. 
Aqui estão os principais conceitos de orientação a objetos em PHP:

**1. Classes e Objetos:**

- **Classe:** Uma classe é um modelo ou uma planta para criar objetos. Ela define as propriedades
(variáveis) e métodos (funções) que os objetos dessa classe terão.

- **Objeto:** Um objeto é uma instância de uma classe. Você pode criar vários objetos a partir
 da mesma classe.

**Exemplo de Definição de Classe:**

```php
class Carro {
    // Propriedades (variáveis de instância)
    public $marca;
    public $modelo;

    // Métodos
    public function ligar() {
        echo "O carro está ligado.";
    }

    public function desligar() {
        echo "O carro está desligado.";
    }
}
```

**2. Encapsulamento:**

- O encapsulamento é um conceito que significa que os detalhes internos de uma classe, 
como suas propriedades, devem ser ocultados do mundo exterior e acessados apenas por métodos
públicos.

- Você pode usar modificadores de acesso como `public`, `private` e `protected` para controlar a 
visibilidade de propriedades e métodos.

**Exemplo de Encapsulamento:**

```php
class Pessoa {
    private $nome;

    public function setNome($novoNome) {
        $this->nome = $novoNome;
    }

    public function getNome() {
        return $this->nome;
    }
}
```

**3. Herança:**

- A herança permite que você crie uma nova classe (classe filha) com base em uma classe existente
(classe pai). A classe filha herda propriedades e métodos da classe pai.

**Exemplo de Herança:**

```php
class Animal {
    public function falar() {
        echo "O animal faz um som.";
    }
}

class Cachorro extends Animal {
    public function falar() {
        echo "O cachorro late.";
    }
}
```

**4. Polimorfismo:**

- O polimorfismo permite que objetos de classes diferentes sejam tratados de maneira semelhante. 
Isso ocorre quando as classes filhas substituem os métodos da classe pai.

**Exemplo de Polimorfismo:**

```php
class Animal {
    public function fazerSom() {
        echo "O animal faz um som.";
    }
}

class Cachorro extends Animal {
    public function fazerSom() {
        echo "O cachorro late.";
    }
}

class Gato extends Animal {
    public function fazerSom() {
        echo "O gato mia.";
    }
}
```

**5. Abstração:**

- A abstração é o conceito de focar nos aspectos essenciais de um objeto e ignorar os detalhes não 
essenciais.

- Você pode criar classes abstratas e métodos abstratos que devem ser implementados nas classes 
filhas.

**Exemplo de Abstração:**

```php
abstract class Forma {
    abstract public function calcularArea();
}

class Retangulo extends Forma {
    public function calcularArea() {
        // Implementação para calcular a área de um retângulo
    }
}
```

A orientação a objetos em PHP é uma poderosa abordagem para organizar e estruturar seu código. 
Ela é amplamente usada em frameworks e aplicativos web modernos, como Laravel e Symfony. 
Ao dominar esses conceitos, você estará em um bom caminho para escrever código PHP mais eficaz
e de alta qualidade. */