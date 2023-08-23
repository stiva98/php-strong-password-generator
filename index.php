<?php
    require_once __DIR__ . '/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <title>PHP Strong Password Generator</title>
    </head>
<body>
    <header>
        <h1>
            PHP Strong Password Generator
        </h1>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="index.php" method="GEt">
                        <label for="inputPassword5" class="form-label">Lunghezza password:</label>
                        <input type="number" min="1" id="inputPassword5" class="form-control" name="passwordLength" required>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mt-3">Invia</button>
                        </div>
                    </form>
                    <?php 
                    if (isset($_GET['passwordLength'])) {
                        $passwordLength = $_GET['passwordLength'];
                        $randomPassword = generateRandomPassword($passwordLength);
                    ?>
                    <p>
                        Password casuale generata: <strong><?php echo "$randomPassword"; ?></strong>
                    </p>
                    <?php 
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>