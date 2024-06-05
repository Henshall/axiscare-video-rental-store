<?php

namespace App\Controllers;

use App\Models\Customer;
use App\Services\StatementGenerator;

class MovieRentalController
{
    public function plainTextStatement()
    {
        // create customer with sample movies
        $customer = new Customer("Susan Ross");
        $customer->addSampleMovies();
        // generate statement
        $statementGenerator = new StatementGenerator($customer);
        // return view
        echo '<pre>' . htmlspecialchars($statementGenerator->generatePlainTextStatement(), ENT_QUOTES, 'UTF-8') . '</pre>';
    }

    public function htmlStatement()
    {
        // create customer with sample movies
        $customer = new Customer("Susan Ross");
        $customer->addSampleMovies();
        // generate statement
        $statementGenerator = new StatementGenerator($customer);
        // return view
        echo $statementGenerator->generateHtmlStatement();
    }

    public function plainTextAndHtmlStatement()
    {
        // create customer with sample movies
        $customer = new Customer("Susan Ross");
        $customer->addSampleMovies();
        // generate statement
        $statementGenerator = new StatementGenerator($customer);
        $plainText = $statementGenerator->generatePlainTextStatement();
        $htmlText = $statementGenerator->generateHtmlStatement();
        // return view
        $viewPath = __DIR__ . '/../Views/PlainTextAndHtmlStatement.php';
        include $viewPath;
    }
}
