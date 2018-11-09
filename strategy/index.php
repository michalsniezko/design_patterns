<?php


// Encapsulate and make each algorithm interchangeable

interface Logger
{
    public function log($data);
}

// Define a family of algorithms (multiple ways to execute one strategy)

class LogToFile implements Logger
{

    public function log($data)
    {
        var_dump('Log the data to a file');
    }
}

class LogToDatabase implements Logger
{

    public function log($data)
    {
        var_dump('Log the data to database');
    }
}

class LogToXWebService implements Logger
{

    public function log($data)
    {
        var_dump('Log the data to a SAAS');
    }
}

class App
{
    public function log($data, Logger $logger = null)
    {
        $logger = $logger ?: new LogToFile();
        $logger->log($data);
    }
}

$app = new App;

$app->log('test');
$app->log('test', new LogToDatabase());