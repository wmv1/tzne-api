<?php
ini_set( 'display_errors', '0');
$msgSucesso = $_GET['msgSucesso'];
$mgsVoltar = $_GET['mgsVoltar'];
$href =$_GET['href'];

?>


    <html lang="en"><head>
            <meta charset="utf-8">
            <meta name="robots" content="noindex, nofollow">

            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <style type="text/css">


                a{
                    color:#63b7ff;
                }
                td {
                    text-align: center;   
                    color: #eeeeee;

                }

                th {
                    text-align: center;   
                    color: #eeeeee;

                }


                select {
                    color: #999999;
                }
                /*Contact sectiom*/
                .content-header{
                    font-family: 'Oleo Script', cursive;
                    color:#fcc500;
                    font-size: 45px;
                }

                .section-content{
                    text-align: center; 

                }
                #contact{

                    font-family: 'Teko', sans-serif;
                    padding-top: 60px;
                    width: 100%;
                    width: 100vw;
                    height: 100%;
                    /*                background: #3a6186;  fallback for old browsers 
                                    background: -webkit-linear-gradient(to left, #3a6186 , #89253e);  Chrome 10-25, Safari 5.1-6 
                                    background: linear-gradient(to left, #3a6186 , #89253e);  W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ 
                    */ color : #fff;    
                }
                .contact-section{
                    padding-top: 40px;
                }
                .contact-section .col-md-6{
                    width: 50%;
                }

                .form-line{
                    /*                border-right: 1px solid #B29999;*/
                }

                .form-group{
                    margin-top: 10px;
                }
                label{
                    font-size: 1.3em;
                    line-height: 1em;
                    font-weight: normal;
                }
                .form-control{
                    font-size: 1.3em;
                    color: #080808;
                }
                textarea.form-control {
                    height: 108px;
                    /* margin-top: px;*/
                }

                .submit{
                    font-size: 1.1em;
                    float: right;
                    width: 150px;
                    background-color: transparent;
                    color: #fff;

                }

                body{
                    background: #3a6186; /* fallback for old browsers */
                    background: -webkit-linear-gradient(to left, #3a6186 , #89253e); /* Chrome 10-25, Safari 5.1-6 */
                    background: linear-gradient(to left, #3a6186 , #89253e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

                }

            </style>
            <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
            <script type="text/javascript">
        window.alert = function () {
        };
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css) {
            if (css)
                $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="' + css + '" type="text/css" />');
            else
                $('head > link').filter(':first').replaceWith(defaultCSS);
        }
        $(document).ready(function () {
            var iframe_height = parseInt($('html').height());
            window.parent.postMessage(iframe_height, 'https://bootsnipp.com');
        });
            </script>
        </head>
        <body style="">
            <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

            <?php
            include 'menu.php';
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="alert alert-success col-xs-6 col-md-offset-3" role="alert"><?php echo $msgSucesso;?></div>

                        <div class="col-xs-12">
                            <a  class="btn btn-info" href="<?php echo $href?>"><?php echo $mgsVoltar?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
