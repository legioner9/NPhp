<? 

namespace A\B\C;

/* Функция — это A\B\C\fopen */
function fopen() {
     /* ... */
     $f = \fopen(...); // Вызов глобальной функции fopen
     return $f;
}