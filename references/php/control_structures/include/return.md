# `return`

`return` возвращает управление программой модулю, из которого была вызвана функция. Выполнение программы продолжается с инструкции, следующей за местом вызова.

Если вызывается из функции, выражение return немедленно прекращает выполнение текущей функции и возвращает свой аргумент как значение данной функции. `return` также завершит выполнение выражения `eval()` или всего файла скрипта.

Если вызывается из глобальной области видимости, выполнение текущего файла скрипта прекращается. Если текущий файл скрипта был подключен с помощью функций `include` или `require`, тогда управление возвращается к файлу, который вызывал текущий. Более того, если текущий файл скрипта был подключен с помощью `include`, тогда значение переданное `return` будет возвращено в качестве значения вызова `include`. Если `return` вызывается из главного файла скрипта, тогда выполнение скрипта прекращается. Если текущий файл скрипта был вызван конфигурационными опциями `auto_prepend_file` или `auto_append_file` из файла настроек `php.ini`, тогда выполнение этого скрипта прекращается.


```php
a.php
<?php
    include("b.php");
    echo "a";
?>

b.php
<?php
    echo "b";
    return;
?>
```