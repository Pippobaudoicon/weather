<?php
    require "getWeather.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Forecast</title>

    <link rel="stylesheet" type="text/css" href="./css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
</head>
<body>
    <div id="background" class="min-vh-100 box">
        <div class="container">
            <div class="row text-white">
                <div class="w-auto mx-auto my-auto text-center form py-4 mt-n5 px-5 black-background">
                    <h1 class="display-5 pb-3">What's the weather in your city?</h1>
                    <div class="px-2">
                        <form action="" class="justify-content-center ">
                            <div class="form-group">
                                <input style="border-radius: .5cm; width: 50%; margin-left: auto;margin-right: auto;" type="text" name="city" id="city" class="form-control" placeholder="Your city" value="<?=$city?>" required>
                            </div>
                            <button style="border-radius: .2cm;" type="submit" class="btn btn-primary btn-lg">Search</button>
                            <?php
                                $class = $weather?'success':'danger';
                            ?>
                            <div class="alert alert-<?=$class?> mt-3">
                            <?= $weather?$weather:$error;?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
</body>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>