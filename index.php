<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>PHP Functions</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>

        <div class="main">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <h1>Functions in PHP</h1>
        <!-- Add your site or application content here -->
        <?php 
        /* Write your PHP here */
        
        /* Functions in PHP also look similar to functions in Javascript. To create a function in PHP, you need to use the 'function' keyword. PHP functions can take parameters and they are also able to return information. Global and local variables still work the same way in PHP as they do in Javascript */
        function greetUser() {
            echo('<br> Hello!<br>');
        }

        /* In PHP, you also need to call the funtion before it can run. */
        greetUser();

        /* Example of a PHP function that takes in parameters and returns a value. */
        function totalCost($a, $b, $c) {
            $sum = $a + $b +$c;
            return $sum; // Returns send a value outside of the function so that it can be accessed and used.
        }

        echo ('<br>Your total today is, $' . totalCost(25, 14, 6) . '.00');

        ?> 

           

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        </div>
    </body>
</html>
