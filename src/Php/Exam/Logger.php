<?php
namespace Php\Exam;
use Psr\Log\LoggerInterface;

class Logger implements LoggerInterface
{

    function __construct(){
        echo "hello\n";
    }

    function debug(){
        echo "debug\n";
    }

    function info(){
        echo "info\n";
    }

    function notice(){
        echo "notice\n";
    }

    function critical(){
        echo "critical\n";
    }

    function error(){
        echo "error\n";
    }
}
  
    