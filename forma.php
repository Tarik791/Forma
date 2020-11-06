<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
    <div class="jumbotron text-center">
        <h2>Form validacija</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <form action="validation.php" method="post">
                    <input type="username" class="form-control" placeholder="username" name="username" id="" required><br>
                    <input type="email" name="email" id="" placeholder="email" class="form-control" required>
                    <select name="year" id="">
                        <?php for($i = 1965;$i<2005;$i++): ?>
                                <option value="<?php echo $i; ?> ">Year of Birth <?php echo $i; ?></option>
                                
                        <?php endfor; ?>
                    </select>        
                            <input type="radio" name="gender" value="male" required>Male
                            <input type="radio" name="gender" id="female">Female <br><br>
                            <br>
                            <p>Programming languages</p>
                            
                            <input type="checkbox" name="languages[]" value="php" id="">Php
                            <input type="checkbox" name="languages[]" value="js" id="">Js
                            <input type="checkbox" name="languages[]" value="C++" id="">C++
                            <button type="submit" name="subBtn" class="btn btn-info form-control">Save</button>
              </form>
            </div>
        </div>
    </div>    
</body>
</html>