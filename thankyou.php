<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Thank you Page</title>
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
        <h1 align='center'>
            Thanks A Lot For Donating
        </h1><br>

        <div class="container">
            <h3>Payment Details:</h3>
            <?php
            include 'instamojo/Instamojo.php';
            $api = new Instamojo\Instamojo('test_6940235fee966d038b4c30ae9e1', 'test_a6dd6862feb9fa3cce477b80c06', 'https://test.instamojo.com/api/1.1/');
            $payid = $_GET['payment_request_id'];
            try {
                $response = $api->paymentRequestStatus($payid);
                ?>
                <table class="table table-bordered">
                    <tr>
                        <th style="text-align: center;">PAYMENT ID: </th>
                        <td style="text-align: center;"><?= $response['payments'][0]['payment_id']; ?></td>      
                    </tr>
                    <tr>
                        <th style="text-align: center;">DONOR'S NAME: </th>
                        <td style="text-align: center;"><?= $response['payments'][0]['buyer_name']; ?></td>      
                    </tr>
                    <tr>
                        <th style="text-align: center;">DONOR'S EMAIL: </th>
                        <td style="text-align: center;"><?= $response['payments'][0]['buyer_email']; ?></td>      
                    </tr>
                    <tr>
                        <th style="text-align: center;">AMOUNT DONATED: </th>
                        <td style="text-align: center;">&#8377;<?= $response['payments'][0]['amount']; ?></td>      
                    </tr>
                </table>

                <?php
            } catch (Exception $e) {
                print('Error: ' . $e->getMessage());
            }
            ?>

            <a href="index.php" class="btn btn-primary btn-block" align='center'>Go Back to Home Page</a>

        </div>
    </body>

</html>