<?php
//-------------------------SUMMARY-----------------------------//

/*
    - PHP Magic methods start with double underscores (__).
    - PHP calls the __get() method automatically when you access a non-existing or inaccessible property.
    - PHP calls the __set() method automatically when you assign a value to a non-existing or inaccessible property.
 */

//------------------------PHP __set() method---------------------------------------//
/*
 * When you attempt to write to a non-existing or inaccessible property, PHP calls the __set() method automatically. The following shows the syntax of the __set() method:
 * public __set ( string $name , mixed $value ) : void
 */

//------------------------PHP __get() method---------------------------------------//
/*
 * When you attempt to access a property that doesn’t exist or a property that is in-accessible e.g., private or protected property, PHP automatically calls the __get() method.
 * The __get() method accepts one argument which is the name of the property that you want to access:
 * public __get ( string $name ) : mixed
 */


class HtmlElement
{
    private $attributes = [];

    private $tag;

    public function __construct($tag)
    {
        $this->tag = $tag;
    }

    public function __set($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }
    }

    public function html($innerHTML = '')
    {
        $html = "<{$this->tag}";
        foreach ($this->attributes as $key => $value) {
            $html .= ' ' . $key . '="' . $value . '"';
        }
        $html .= '>';
        $html .= $innerHTML;
        $html .= "</$this->tag>";

        return $html;
    }
}

$div = new HtmlElement('div');

$div->id = 'page';
$div->class = 'light';

echo $div->html('Hello');

// show the attributes
echo $div->class; // light
echo $div->id; // main
