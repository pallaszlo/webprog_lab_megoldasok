<?php
//-------------------------SUMMARY-----------------------------//

/*
    - Use the __destruct() to define a destructor for a class.
    - PHP automatically invokes the destructor when the object is deleted or the script is terminated.
 */

class File
{
    private $handle;

    private $filename;

    public function __construct($filename, $mode = 'r')
    {
        $this->filename = $filename;
        $this->handle = fopen($filename, $mode);
    }

    public function __destruct()
    {
        // close the filehandle
        if ($this->handle) {
            fclose($this->handle);
        }
    }

    public function read()
    {
        // read the file contents
        return fread($this->handle, filesize($this->filename));
    }
}

$f = new File('./test.txt');
echo $f->read();
