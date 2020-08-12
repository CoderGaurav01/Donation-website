<?php /*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */ ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Donation</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="row box">
            <div class="col-lg-offset-3 col-lg-6">
                <div class="panel-group">
                    <div class="panel panel-primary" align="center">
                        <div class="panel-heading">
                            <h2>Contribute Here</h2>
                        </div>
                        <div class="panel-body">
                            <form action="pay.php" method="POST">
                                <div class="form-group form-inline">
                                    <label for="first_name">First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    <input style="width: 70%;" type="text" class="form-control" name="first_name" placeholder="Enter First Name" required="true" id="first_name"/>
                                </div>
                                <div class="form-group form-inline">
                                    <label for="last_name">Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    <input style="width: 70%;" type="text" class="form-control" name="last_name" placeholder="Enter Last Name" required="true" id="last_name"/>
                                </div>
                                <div class="form-group form-inline">
                                    <label for="email">Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    <input style="width: 70%;" type="email" class="form-control" name="email" placeholder="abc@xyz.com" required="true" id="email">
                                </div>
                                <div class="form-group form-inline">
                                    <label for="phone">Mobile Number:&nbsp;&nbsp;&nbsp;</label>
                                    <input style="width: 70%;" type="tel" class="form-control" name="phone" placeholder="Enter 10 digit mobile number" required="true" id="phone"/>
                                </div>
                                <div class="form-group form-inline">
                                    <label for="amount">Amount:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    <select style="width: 70%;" id="amount" class="form-control" name="amount" placeholder="Select Amount" required="true"/>
                                    <option>100</option>
                                    <option>500</option>
                                    <option>1000</option>
                                    <option>2000</option>
                                    <option>5000</option>
                                    </select>                                   
                                </div>
                                <div class="form-group form-inline">
                                    <input style="margin-left: 45%;" type="submit" value="Donate" class="form-control btn btn-default"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
        </div>
    </body>
</html>


