<?php
namespace Psr\Log;

interface LoggerInterface
{

    
    function debug();

    function info();

    function notice();

    function critical();

    function error();



}