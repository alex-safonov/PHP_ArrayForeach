# PHP_array_foreach
PHP: перебор многомерного массива

Есть массив, каждый элемент которого может быть либо типа string, либо типа array, типы значения которого также могут быть как у корневого массива. Пример:
['a', 'b',[ 'c', 'd'],[ 'e', 'f',['g'],'h'],'i']
Требуется вывести данный массив в виде иерархии:
-a
-b
--c
--d
--e
--f
---g
--h
-i
