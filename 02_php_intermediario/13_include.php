<?php 
/*
A função `include()` em PHP é usada para incluir e executar um arquivo PHP em outro arquivo PHP. 
Isso é útil para dividir seu código em arquivos menores e reutilizáveis, 
o que facilita a manutenção e a organização do código. 
A sintaxe básica da função `include()` é a seguinte:

```php
include 'caminho/do/arquivo.php';
```

Aqui está como a função `include()` funciona:

1. O argumento para `include` é o caminho do arquivo que você deseja incluir. 
O caminho pode ser especificado de várias maneiras, 
como um caminho absoluto ou relativo ao arquivo atual.

2. Quando o script PHP encontra a instrução `include()`, 
ele lê e executa o código no arquivo especificado.

3. Qualquer variável definida ou função criada no arquivo incluído estará disponível no arquivo 
atual após a inclusão.

4. Se o arquivo especificado não existir ou houver algum erro ao incluí-lo, o PHP gerará um aviso, 
mas a execução do script continuará.

**Exemplo de Uso:**

Suponha que você tenha dois arquivos, `header.php` e `footer.php`, 
que contêm o cabeçalho e o rodapé HTML de uma página web:

`header.php`:
```php
<!DOCTYPE html>
<html>
<head>
    <title>Minha Página</title>
</head>
<body>
    <header>
        <h1>Meu Site</h1>
    </header>
```

`footer.php`:
```php
    <footer>
        <p>&copy; 2023 Meu Site</p>
    </footer>
</body>
</html>
```

Agora, você pode incluir esses arquivos em sua página principal usando `include`:

`index.php`:
```php
<?php
include 'header.php';

// Conteúdo da página

include 'footer.php';
?>
```

Quando o arquivo `index.php` é executado, o conteúdo de `header.php` e `footer.php` é incluído,
 e a página resultante terá o cabeçalho e o rodapé HTML.

Além do `include()`, existe também a função `require()`, que funciona de maneira semelhante. 
A principal diferença é que, se o arquivo especificado em `require()` 
não existir ou houver algum erro, ele gerará um erro fatal e interromperá a execução do script. 
Portanto, o `require()` é usado quando você tem certeza de que o arquivo é essencial para o 
funcionamento do script, enquanto o `include()` é usado quando o arquivo é opcional. */