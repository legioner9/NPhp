<?

// Пример #1 Описание нескольких пространств имён, простой синтаксис

namespace MyProject;

const CONNECT_OK = 1;
class Connection
{ /* ... */
}
function connect()
{ /* ... */
}

namespace AnotherProject;

const CONNECT_OK = 1;
class Connection
{ /* ... */
}
function connect()
{ /* ... */
}

// Пример #2 Описание нескольких пространств имён, синтаксис со скобками

namespace MyProject2 {
    const CONNECT_OK = 1;
    class Connection
    { /* ... */
    }
    function connect()
    { /* ... */
    }
}

namespace AnotherProject2 {
    const CONNECT_OK = 1;
    class Connection
    { /* ... */
    }
    function connect()
    { /* ... */
    }
}