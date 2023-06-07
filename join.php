<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/join.css">
</head>

<body>
    <div class="mr-logo">

        <img src="images/logo1.jpg" alt="MR compney">

    </div>
    <hr>

    <div class="Join-as-a-client-or-freelancer">

        <form action="join.php" method="POST">

            <div class="heading-of-join-as-a-freelancer">

                <h1>Join as a client or freelancer</h1>

            </div>


            <div class="join-as-client-or-freelancer-1">

                <div class="join-as-client-hiring">

                    <div class="list-item">

                        <span>I’m a client, hiring for a project</span>
                    </div>
                    <div class="radio-item">

                        <label>
                            <input type="radio" name="join" value="client" required id="client">
                        </label>
                    </div>
                </div>

                <div class="join-as-a-freelancer">

                    <div class="list-item">

                        <span>

                            I’m a freelancer,<br> looking for work</span>
                    </div>
                    <div class="radio-item">

                        <label>
                            <input type="radio" name="join" value="developer" required id="developer">
                        </label>
                    </div>

                </div>


            </div>
            <div class="button">

                <button type="submit" class="btn"> create account</button>
            </div>
        </form>

    </div>
</body>

</html>

<?php
if (
    isset($_POST['join']) == "client"
) {
    header("location:joinclient.php");
}
if (
    isset($_POST['join']) == "developer"
) {
    header("location:joinasadeveloper.php");
}
?>