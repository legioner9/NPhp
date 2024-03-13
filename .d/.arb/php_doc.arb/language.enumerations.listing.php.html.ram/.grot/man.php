<?

enum CspDirective: String
{
    case Default = "default-src";
    case Image = "img-src";
    case Font = "font-src";
    case Script = "script-src";
    case Style = "style-src";
}

/** list all CSP directives */
foreach (CspDirective::cases() as $directive) {
    echo $directive->name . ":" . $directive->value . PHP_EOL;
}

var_dump(CspDirective::cases());

// Default:default-src
// Image:img-src
// Font:font-src
// Script:script-src
// Style:style-src
// array(5) {
//   [0]=>
//   enum(CspDirective::Default)
//   [1]=>
//   enum(CspDirective::Image)
//   [2]=>
//   enum(CspDirective::Font)
//   [3]=>
//   enum(CspDirective::Script)
//   [4]=>
//   enum(CspDirective::Style)