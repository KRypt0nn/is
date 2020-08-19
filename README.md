## Функция is

Всё что делает данный репозиторий - добавляет функцию `is`. Я серьёзно

| Аргумент | Результат |
| - | - |
| true | true |
| false | false |
| null | false |
| 0 | true |
| 1 | true |
| '' | false |
| ' ' | true |
| '0' | true |
| '1' | true |
| [] | true |

## Установка

```cmd
php qero.phar i KRypt0nn/is
```

```php
<?php

require 'qero-packages/autoload.php';
```

[Что такое Qero?](https://github.com/KRypt0nn/Qero)

<p align="center">или</p>

Скачайте репозиторий и подключите главный файл пакета:

```php
<?php

require 'is/is.php';
```

## Тест на покрытие

```php
php test.php
```

Всё. Там.. ну посмотрите сами, просто тест того, что описано в табличке выше

## Пример использования

```php
if (is ($something)):
    <p><?= $something ?></p>
endif;
```

Автор: [Подвирный Никита](https://vk.com/technomindlp). Специально для [Enfesto Studio Group](https://vk.com/hphp_convertation)