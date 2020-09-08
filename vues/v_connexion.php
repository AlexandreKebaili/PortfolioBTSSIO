<!-- Custom styles for this template -->
<link href="signin.css" rel="stylesheet">
<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

<div class="container">
<body class="text-center">
<form class="form-control" align='center' action="index.php?uc=administrer&action=controler" method="post">
      <h1 class="h3 mb-3 font-weight-normal">Connexion</h1>
      <label for="inputEmail" class="badge">Email : </label><br>
      <input type="email" id="inputEmail" class="form-control" required name ="email" >
      <label for="inputPassword" class="badge">Mot de passe : </label>
      <input type="password" id="inputPassword" class="form-control"  required name ="pass">
     <br>
      <button class="btn btn-sm btn-primary" type="submit">Connexion</button>
    </form>
    
</body>
</div>
    <br>
<p>Si vous ne possédez pas encore de compte : <a href="index.php?uc=administrer&action=inscription">Inscrivez vous</a> !</p>
