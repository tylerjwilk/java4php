<?php

#doc
#    classname:    Test
#    scope:        PUBLIC
# description:      quickly hacked testing class
#
#/doc

class Test 
{
    // should we output string info on tests
    var $output = true;
    var $name = '';

    // construct
    function __construct ($name = 'Test')
    {
        $this->name = $name;
    }
    
    // assert equals function
    function assertEquals($input, $expected)
    {
        $assert = ' Equals ';
        $result_bool   = false;
        $result_string = 'Failed';
        if ($input == $expected) 
        {
            $result_bool   = true;
            $result_string = 'Passed';
        }
        if ($this->output)
        {
            echo "{$this->name} $assert: $result_string;\n";
        }
        return $result_bool;
    }    
    
    // create
    static public function Create($name)
    {
        $test = new Test($name);
        return $test;
    }
    
}

