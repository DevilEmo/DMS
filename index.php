<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/material-design-icons/iconfont/material-icons.css">
    <link rel="stylesheet" type="text/css" href="node_modules/materialize-css/dist/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Barrio" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <title>Login</title>

</head>
<style>
    body {
      display: flex;
      max-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
      opacity:0.97;
      background-color:grey;
    }

    body {
      background: #fff;
    }

  </style>


<body style="font-family: 'Barrio', cursive; color:#263238 blue-grey darken-4; background-image:url('img/ama.png');background-size:cover;">
</div>
  <main>
    <center>
      <div class="section"></div>
      <h4 class="greet"><span class="txt-type" data-wait="3000" data-words='[" We are nothing without you!"," Welcome to our Site!"," IT?"," AMA ako!"]'></span></h4>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='text' name='username' id='username' />
                <label for='username'>Enter your Username</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Enter your password</label>
              </div>
              <label style='float: right;'>
								<a class='pink-text' href='#!'><b>Forgot Password?</b></a>
							</label>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
              </div>
            </center>
          </form>
        </div>
      </div>
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>

            <?php
                        require_once 'php/check.php';
                    ?>

<script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/materialize-css/dist/js/materialize.min.js" type="text/javascript"></script>
  <script src="js/material.js"></script>
  <script src="js/login.js"></script>


</html>