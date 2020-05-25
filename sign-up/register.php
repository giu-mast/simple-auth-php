<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
  <div class="app">
    <div class="container">
      <div class="row">
        <div class="col-8 offset-2">
          <h2>
            Form di registrazione senza password
          </h2>
          <p>
            <?php
              if(count($_POST) > 0){
                echo "Debug:<br/>";
                print_r($_POST);
              }
            ?>
          </p>
          <form class="form container" method="post" action="./register.php"> 
            <div class="row">
              <div class="form-field-wrapper d-flex">
                <label for="first_name">
                  Nome
                </label>
                <input type="text" name="first_name" id="first_name" />
              </div>
            </div>
            <div class="row">
              <div class="form-field-wrapper d-flex">
                <label for="last_name">
                  Cognome
                </label>
                <input type="text" name="last_name" id="last_name" />
              </div>
            </div>
            <div class="row">
              <div class="form-field-wrapper d-flex">
                <label for="email">
                  E-mail
                </label>
                <input type="email" name="email" id="email" />
              </div>
            </div>
            <div class="row">
              <div class="form-field-wrapper d-flex">
                <input type="submit"/>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>