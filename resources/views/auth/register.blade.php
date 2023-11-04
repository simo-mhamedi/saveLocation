
    <link href="{{ URL::asset('css/authStyle/register.css') }}" rel="stylesheet" />
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    {{-- <style>
        form {
            height: auto;
            width: 400px;
            background-color: rgba(255, 255, 255, 0.13);
            position: absolute;
            transform: translate(-50%, -50%);
            top: 71%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 50px 35px;
        }

        .link {
            margin-top: 5px;
            align-items: center;
            text-align: center;
            text-decoration: none;
            display: flex;
            justify-content: center;
        }
    </style>
    </head>
    {{-- <div class="container">
    <div class="title">Registration</div>
    <form role="form" method="post" action="{{ route('register') }}" id="registration-form">
        @csrf
        <div class="user__details">
        <div class="input__box">
          <span class="details">Full Name</span>
          <input type="text" name="fullname" placeholder="E.g: John Smith" required>
        </div>
        <div class="input__box">
          <span class="details">Username</span>
          <input type="text"  name="username" placeholder="johnWC98" required>
        </div>
        <div class="input__box">
          <span class="details">Email</span>
          <input type="email" name="email" placeholder="johnsmith@hotmail.com" required>
        </div>
        <div class="input__box">
          <span class="details">Phone Number</span>
          <input type="tel" name="phone" placeholder="012-345-6789" required>
        </div>
        <div class="input__box">
          <span class="details">Password</span>
          <input type="password"name="password" placeholder="********" required>
        </div>
        <div class="input__box">
          <span class="details">Confirm Password</span>
          <input type="password" name="confirmPassword" placeholder="********" required>
        </div>

      </div>

      <div class="button">
        <input type="submit" value="Register">
      </div>
    </form>
  </div> --}}
    {{-- <script>
    document.addEventListener("DOMContentLoaded", (event) => {
        document.getElementById("registration-form").addEventListener("submit", function(event) {
    var password = document.querySelector('input[name="password"]').value;
    var confirmPassword = document.querySelector('input[name="confirmPassword"]').value;

    if (password !== confirmPassword) {
      alert("Passwords do not match");
      event.preventDefault(); // Prevent form submission
    }
  });
    });


</script> --}}



<body>
    <div class="login-root">
      <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
        <div class="loginbackground box-background--white padding-top--64">
          <div class="loginbackground-gridContainer">
            <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
              <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
              </div>
            </div>
            <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
              <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
            </div>
            <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
              <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
            </div>
            <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
              <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
            </div>
            <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
              <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
            </div>
            <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
              <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
            </div>
            <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
              <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
            </div>
            <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
              <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
            </div>
            <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
              <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
            </div>
          </div>
        </div>
        <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
          <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
            <h1><a href="http://blog.stackfindover.com/" rel="dofollow">S'inscrire</a></h1>
          </div>
          <div class="formbg-outer">
            <div class="formbg">
              <div class="formbg-inner padding-horizontal--48">
                <span class="padding-bottom--15">Inscrivez-vous à votre compte</span>
                <form role="form" method="post" action="{{ route('register') }}" id="registration-form">
                  @csrf                <div class="field padding-bottom--24">
                    <label for="email">Nom et prénom</label>
                    <input type="text" required name="fullname" placeholder="Full name" id="fullname">
                </div>
                  <div class="field padding-bottom--24">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" required name="username" placeholder="User name" id="username">
                </div>
                <div class="field padding-bottom--24">
                    <label for="username">Email</label>
                    <input type="email" required name="email" placeholder="Email" id="email">
                </div>
                  <div class="field padding-bottom--24">
                    <div class="grid--50-50">
                      <label for="password">Mot de passe</label>
                    </div>
                    <input type="password" name="password">
                  </div>
                  <div class="field padding-bottom--24">
                    <div class="grid--50-50">
                      <label for="password">Confirmez le mot de passe</label>
                    </div>
                    <input type="password" required placeholder="Confirm password" name="confirmPassword">
                  </div>
                  <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                  </div>
                  <div class="field padding-bottom--24">
                    <input type="submit" name="submit" value="Continue">
                  </div>
                </form>
              </div>
            </div>
            <div class="footer-link padding-top--24">
              <span>tu as un compte ?<a href="/login">Se connecter</a></span>
              <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

  </html>

  <script>
    document.addEventListener("DOMContentLoaded", (event) => {
      document.getElementById("registration-form").addEventListener("submit", function (event) {
        var password = document.querySelector('input[name="password"]').value;
        var confirmPassword = document.querySelector('input[name="confirmPassword"]').value;

        if (password !== confirmPassword) {
          alert("Passwords do not match");
          event.preventDefault(); // Prevent form submission
        }
      });
    });
  </script>
  </body>
  </html>
