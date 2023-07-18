<?php

class Page
{

    //------------------- BEGIN HEADER --------------------
    static function header()
    { ?>
        <!DOCTYPE html>
        <html lang="en">
       
        <head>
           <meta name="viewport" content="width=device-width, initial-scale=1" />
           <meta http-equiv="content-type" content="text/html; charset=utf-8" />    <meta name="Alfredo Morales" content="INSPIRO" />    
           <meta name="description" content="This page is able to send emails to all the customers">
           <link rel="icon" type="image/png" href="img/logo.png">   
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <!-- Document title -->
           <title>Stellar Wholesale Inc - Send Emails</title>
           <!-- Stylesheets & Fonts -->
           <link href="css/style.css" rel="stylesheet">
        </head>

        <body>
            <header>
                <div class="col-4">
                    <img src="img/logo.png"/>
                </div>
            </header>
    <?php }
    //------------------- END HEADER --------------------

    //------------------- BEGIN SECTION PRINCIPAL --------------------

    static function sectionPrincipal($conection)
    { ?>
        <section>
            <div class="title">SEND EMAILS TO CUSTOMERS</div>
            <form method="POST">
                <div class="table">
                        <input type="text" name="exist" value="true" style="display:none;" />
                        <input type="text"  name="name" placeholder="Insert Company name" style="width:100%; height:30px; margin-left:3%; border-radius:5px;" required /> <br><br>
                        <input type="email"  name="email" placeholder="Insert Company email"  style="width:100%; height:30px; margin-left:3%; border-radius:5px;" required /> <br><br>
                        <input type="text"  name="token" placeholder="Insert company's token"  style="width:100%; height:30px; margin-left:3%; border-radius:5px;" required /><br>
                        <label style="margin-left:3%;">To get the company's token, please go to Odoo, find the user in user module and export the company information to see the token</label>
                </div>
               
                
                <div class="sendEmailButton">
                    <input type="submit" value="Send Emails" class="buttonSubmitEmail" />
                </div>
            </form>
        </section>
    <?php }

    //------------------- END SECTION PRINCIPAL --------------------

    //------------------- BEGIN MESAGE -----------------------------

    static function message()
    { ?>
        <section>
            <div class="title">The emails have been sent to the customers.</div>
        </section>
    <?php }

    //------------------- END MESSAGE ------------------------------

    //------------------- BEGIN FOOTER --------------------
    static function footer()
    { ?>
                <footer>
                    Stellar Wholesale Inc 2021
                </footer>
            </body>
        </html>
    <?php }
    //------------------- END FOOTER --------------------
}

?>