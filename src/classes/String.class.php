<?php

    #doc
    #    classname:    String
    #    scope:        PUBLIC
    # description:     A php implementation of a subset of the Java String class
    #                  http://docs.oracle.com/javase/6/docs/api/index.html?java/lang/String.html
    #/doc

    // TODO : write code
    // TODO : write tests
    // TODO : test if work
    // TODO : proper documentation

    class String
    {
        // store the string
        var $str;

        // Initializes a newly created String object so that it represents the same sequence of characters as the argument; in other words, the newly created string is a copy of the argument string.
        function __construct ($str)
        {
            $this->str = $str;
        }

        // Returns the char value at the specified index.
        function charAt(int $index)
        {
            return $this->str[$index];
        }

        // Concatenates the specified string to the end of this string.
        function concat(string $str)
        {
            $this->str .= $str;
            return $this;
        }

        // Tests if this string ends with the specified suffix.
        function endsWith(string $suffix)
        {
            // TODO
        }

        // Compares this string to the specified string
        function equals(string $str) // object $obj) ... differing from the java spec here because i want to
        {
            return ($str == $this->str);
        }

        // Compares this String to another String, ignoring case considerations.
        function equalsIgnoreCase(string $str)
        {
            return (strtolower($str) == $this->toLowerCase()->str);
        }

        // Returns the index within this string of the first occurrence of the specified substring.
        function indexOf(string $str, int $fromIndex)
        {
            // TODO
        }

        // Returns true if, and only if, length() is 0.
        function isEmpty()
        {
            return ($this->length() == 0);
        }

        // Returns the index within this string of the last occurrence of the specified substring, searching backward starting at the specified index.
        function lastIndexOf(string $string, int $fromIndex)
        {
            // TODO
        }

        // Returns the length of this string.
        function length()
        {
            return strlen($this->str);
        }

        // Tells whether or not this string matches the given regular expression.
        function matches(string $regex)
        {
            return preg_match($regex, $this->str);
        }

        // Returns a new string resulting from replacing all occurrences of oldChar in this string with newChar.
        function replace(string $target, string $replacement)
        {
            return str_replace($target, $replacement, $this->str);
        }

        // Tests if this string starts with the specified prefix
        function startsWith(string $prefix)
        {
            // TODO
        }

        // Returns a new string that is a substring of this string.
        function substring(int $beginIndex, int $length) // , int $endIndex) ... differing from the java spec here because i want to
        {
            return substr($this->str, $beginIndex, $length);
        }

        // Converts all of the characters in this String to lower case.
        function toLowerCase()
        {
            $this->str = strtolower($this->str);
            return $this;
        }

        // Converts all of the characters in this String to upper case.
        function toUpperCase()
        {
            $this->str = strtoupper($this->str);
            return $this;
        }

        // Returns a copy of the string, with leading and trailing whitespace omitted.
        function trim()
        {
            return trim($this->str);
        }
        
        // return a string version of this String object
        function __toString()
        {
            return $this->str;
        }

    }

