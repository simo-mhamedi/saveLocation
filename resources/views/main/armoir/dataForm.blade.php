



<link href="{{ URL::asset('css/mainStyle/form.css') }}" rel="stylesheet" />
<style>
    select{
        width: 100%;
    padding: 10px;
    }
    .button input {
  width: 100%;
  outline: none;
  color: #fff;
  border: none;
  font-size: 18px;
  font-weight: 500;
  margin-top: 10px;
  padding: 10px;
  margin-bottom: 10px;
  border-radius: 0px;
  background: linear-gradient(135deg, var(--main-blue), var(--main-purple));
  transition: all 0.3s ease;
}

 .button input:hover {
  background: linear-gradient(-135deg, var(--main-blue), var(--main-purple));
}
.custom-button {
    margin: 20px;
  font-family: inherit;
  font-size: 18px;
  background: linear-gradient(to bottom, #4dc7d9 0%, #66a6ff 100%);
  color: white;
  padding: 0.8em 1.2em;
  display: flex;
  align-items: center;
  justify-content: center;
  border: none;
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
  transition: all 0.3s;
}

.custom-button:hover {
  transform: translateY(-3px);
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
}

.custom-button:active {
  transform: scale(0.95);
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
}

.custom-button span {
  transition: all 0.3s;
  text-align: center;
  display: block;
  margin-left: 0.4em;
  transition: all 0.3s;
}

.custom-button svg {
  width: 18px;
  height: 18px;
  fill: white;
  transition: all 0.3s;
}

.custom-button .svg-wrapper {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background-color: rgba(255, 255, 255, 0.2);
  margin-right: 0.5em;
  transition: all 0.3s;
}

.custom-button:hover .svg-wrapper {
  background-color: rgba(255, 255, 255, 0.5);
}

.custom-button:hover svg {
  transform: rotate(45deg);
}
</style>
<head>
    <script>
        function goBack() {
            window.location.href = '/borough';
        }
      </script>
</head>
@include("inc.nav")


<div class="container">

<div>
    <div class="button">
        <input onclick="goBack()" type="submit"   value="Retour">
    </div>
    <form role="form" method="POST" action="{{ route('saveArmoir') }}">
        @csrf

        <div>Latitude: <span  id="lat"></span></div>
        <div>Longitude: <span  id="lon"></span></div>
        <input name="lat" id="latinput" type="hidden">
        <input name="lon" id="loninput" type="hidden">
        <a class="custom-button" id="currPos">
            <div class="svg-wrapper-1">
            </div>
            <span>Get Current Position</span>
        </a>
      <div class="user__details">
        <div class="input__box">
          <span class="details">Source</span>
         <select name="source">
            <option value="" style="display: none;">La source d'alimentation</option>
            <option value="directement">directement</option>
            <option value="depuis un poste">depuis un poste</option>
            <option value="depuis un coffret de dérivation électrique">depuis un coffret de dérivation électrique</option>
         </select>
        </div>
      </div>
      <div class="user__details">
        <div class="input__box">Conformite a la NF C17200</span>
         <select name="conformite">
            <option value="" style="display: none;">Conformite a la NF C17200</option>
            <option value="MISE A LA TERR">MISE A LA TERR</option>
            <option value="PAS DE MISE À LA TERRE">PAS DE MISE À LA TERRE</option>
         </select>
        </div>
      </div>
      <div class="user__details">
      <div class="input__box">
        <span class="details">Observation</span>
        <input type="text"  name="observation" placeholder="observation">
      </div>
      <div class="input__box">
        <span class="details">Type</span>
        <input type="text" name="type"  placeholder="Type">
      </div>
      </div>
      <div class="button">
        <input type="submit" name="type"  id="getLocation" value="save">
      </div>
    </form>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", (event) => {
        const currPos = document.getElementById("currPos");
        currPos.addEventListener("click", getLocation);
        console.log("dd");

        function getLocation() {
            let geolocation = navigator.geolocation;
            if (geolocation) {
                geolocation.getCurrentPosition(onGeoSuccess, onGeoError);
            } else {
                console.log("Geolocation is not supported by this browser.");
            }
        }

        function onGeoSuccess(position) {
            const lat = document.getElementById("lat");
            const lon = document.getElementById("lon");
            const latinput = document.getElementById("latinput");
            const loninput = document.getElementById("loninput");
            lat.innerHTML = position.coords.latitude;
            lon.innerHTML = position.coords.longitude;
            latinput.value = position.coords.latitude;
            loninput.value =position.coords.longitude;
        }

        function onGeoError(error) {
            console.log("Error getting geolocation:", error.message);
        }

        const getLocationButton = document.getElementById('getLocation');
    });

    $(document).ready(function() {

// Other important pens.
// Map: https://codepen.io/themustafaomar/pen/ZEGJeZq
// Dashboard: https://codepen.io/themustafaomar/pen/jLMPKm

let dropdowns = document.querySelectorAll('.navbar .dropdown-toggler')
let dropdownIsOpen = false

// Handle dropdown menues
if (dropdowns.length) {
  // Usually I don't recommend doing this (adding many event listeners to elements have the same handler)
  // Instead use event delegation: https://javascript.info/event-delegation
  // Why: https://gomakethings.com/why-event-delegation-is-a-better-way-to-listen-for-events-in-vanilla-js
  // But since we only have two dropdowns, no problem with that.
  dropdowns.forEach((dropdown) => {
    dropdown.addEventListener('click', (event) => {
      let target = document.querySelector(`#${event.target.dataset.dropdown}`)

      if (target) {
        if (target.classList.contains('show')) {
          target.classList.remove('show')
          dropdownIsOpen = false
        } else {
          target.classList.add('show')
          dropdownIsOpen = true
        }
      }
    })
  })
}

// Handle closing dropdowns if a user clicked the body
window.addEventListener('mouseup', (event) => {
  if (dropdownIsOpen) {
    dropdowns.forEach((dropdownButton) => {
      let dropdown = document.querySelector(`#${dropdownButton.dataset.dropdown}`)
      let targetIsDropdown = dropdown == event.target

      if (dropdownButton == event.target) {
        return
      }

      if ((!targetIsDropdown) && (!dropdown.contains(event.target))) {
        dropdown.classList.remove('show')
      }
    })
  }
})

// Open links in mobiles
function handleSmallScreens() {
  document.querySelector('.navbar-toggler')
    .addEventListener('click', () => {
      let navbarMenu = document.querySelector('.navbar-menu')

      if (!navbarMenu.classList.contains('active')) {
        navbarMenu.classList.add('active')
      } else {
        navbarMenu.classList.remove('active')
      }
    })
}

handleSmallScreens()


    });

</script>
