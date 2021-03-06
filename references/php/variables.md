# Переменные 

Переменные в PHP представлены знаком доллара с последующим именем переменной. Имя переменной чувствительно к регистру.

Имена переменных соответствуют тем же правилам, что и остальные наименования в PHP. Правильное имя переменной должно начинаться с буквы или символа подчеркивания и состоять из букв, цифр и символов подчеркивания в любом количестве. Это можно отобразить регулярным выражением: [a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]

```php
<?php
    $var = 'Боб';
    $Var = 'Джо';
    echo "$var, $Var";      // выведет "Боб, Джо"
    
    $4site = 'еще нет';     // неверно; начинается с цифры
    $_4site = 'еще нет';    // верно; начинается с символа подчеркивания
    $täyte = 'mansikka';    // верно; 'ä' это (Расширенный) ASCII 228.
?>
```

### Область видимости переменной

Этот скрипт не сгенерирует никакого вывода, поскольку выражение echo указывает на локальную версию переменной $a, а в пределах этой области видимости ей не было присвоено значение. Возможно вы заметили, что это немного отличается от языка C в том, что глобальные переменные в C автоматически доступны функциям, если только они не были перезаписаны локальным определением. Это может вызвать некоторые проблемы, поскольку люди могут нечаянно изменить глобальную переменную. В PHP, если глобальная переменная будет использоваться внутри функции, она должна быть объявлена глобальной внутри определения функции.

```php
<?php
    $a = 1; /* глобальная область видимости */ 
    
    function test()
    {
        echo $a; /* ссылка на переменную в локальной области видимости */ 
    } 
    
    test();
?>
```

### Ключевое слово `global`

```php
<?php
    $a = 1;
    $b = 2;
    
    function Sum()
    {
        global $a, $b;
    
        $b = $a + $b;
    } 
    
    Sum();
    echo $b;
?>
```

Вышеприведенный скрипт выведет 3. После определения $a и $b внутри функции как global все ссылки на любую из этих переменных будут указывать на их глобальную версию. Не существует никаких ограничений на количество глобальных переменных, которые могут обрабатываться функцией.

### Использование статических `static` переменных

Другой важной особенностью области видимости переменной является статическая переменная. Статическая переменная существует только в локальной области видимости функции, но не теряет своего значения, когда выполнение программы выходит из этой области видимости. Рассмотрим следующий пример:

```php
<?php
    function test()
    {
        static $a = 0;
        echo $a;
        $a++;
    }
?>
```

### Переменные переменных

Иногда бывает удобно иметь переменными имена переменных. То есть, имя переменной, которое может быть определено и изменено динамически
Переменная переменной берет значение переменной и рассматривает его как имя переменной. В вышеприведенном примере hello может быть использовано как имя переменной при помощи двух знаков доллара. То есть:

```php
<?php
    $a = 'hello';
    $$a = 'world';
    echo "$a ${$a}"; //hello world
    echo "$a $hello"; //hello world
?>
```


