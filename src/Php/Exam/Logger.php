<?php
namespace Php\Exam;
use Psr\Log\LoggerInterface;

class Logger implements LoggerInterface
{

    function __construct(){
        echo "hello";
    }

    function debug(){
        echo "debug";
    }

    function info(){
        echo "info";
    }

    function notice(){
        echo "notice";
    }

    function critical(){
        echo "critical";
    }

    function error(){
        echo "error";
    }
}
  
    