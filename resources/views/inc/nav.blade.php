<link href="{{ URL::asset('css/mainStyle/form.css') }}" rel="stylesheet" />
<head>

</head>
<nav class="navbar">
    <div class="container">

      <div class="navbar-header">
        <button class="navbar-toggler" data-toggle="open-navbar1">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <a href="#">
          <h4>enregistrer<span>L'emplacement</span></h4>
        </a>
      </div>

      <div class="navbar-menu" id="open-navbar1">
        <ul class="navbar-nav">
          <li class="navbar-dropdown">
            <a href="/exportFilesArmoir" class="dropdown-toggler" data-dropdown="my-dropdown-id">
            télécharger  <i class="fa fa-angle-down"></i>
            </a>

          </li>
          <li><a href="/logout">Se déconnecter</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>
