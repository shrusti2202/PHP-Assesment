<?php
    include_once('../Admin/model.php');

    class control extends model
    {
        function __construct()
        {
            model :: __construct();
            $url = $_SERVER['PATH_INFO'];

            switch($url)
            {
                case '/home':
                    $fruit=$this->select('fruit');
                    include_once('index.php');
                    break;

                case '/about':
                    include_once('about.php');
                    break;

                case '/fruit':
                    $fruit=$this->select('fruit');
                    include_once('fruit.php');
                    break;

                    default:
                    echo "<h1 style='color:red;text-align:center'> Page Not Found </h1>";
                    break;
            }
        }
    }
    $obj=new control;
?>

