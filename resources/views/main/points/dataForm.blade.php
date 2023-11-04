



<link href="{{ URL::asset('css/mainStyle/form.css') }}" rel="stylesheet" />
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
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
#map { height: 180px; }

</style>
<head>
    <script>
        function goBack() {
            window.location.href = '/points';
        }
      </script>
             <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
             integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
             crossorigin=""/>
             <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
             integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
             crossorigin=""></script>
</head>
@include("inc.pointnav")


<div class="container">

<div>
    <div class="button">
        <input onclick="goBack()" type="submit"   value="Retour">
    </div>
    <form role="form" method="POST" action="{{ route('savePoint') }}">
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
        <div id="map"></div>

        <div class="user__details">
            <div class="input__box">
              <span class="details">Code du point lumineux</span>
              <input type="text"  name="codepoint" placeholder="Code du point lumineux">
            </div>
            <div class="input__box">
                <span class="details">Categorie d'elairage</span>
               <select name="categorie">
                  <option value="" style="display: none;">Categorie d'elairage</option>
                  <option value="résidentiel">résidentiel</option>
                  <option value="routier">routier</option>
                  <option value="commercial">commercial</option>
                  <option value="espace administratif">espace administratif</option>
                  <option value="espace public">espace public</option>
                  <option value="espace sportif ou ouverage d'art">espace sportif ou ouverage d'art</option>
               </select>
              </div>
            </div>



      <div class="user__details">
        <div class="input__box">
          <span class="details">Type du reseau</span>
         <select name="typeReseau">
            <option value="" style="display: none;">Type du reseaun</option>
            <option value="souterrain">souterrain</option>
            <option value="daeérien">aeérien</option>
            <option value="aero-souterrain">aero-souterrain</option>
         </select>
        </div>
        <div class="input__box">Etat du reseau</span>
            <select name="etatReseau">
               <option value="" style="display: none;">Etat du reseau</option>
               <option value="bon">bon</option>
               <option value="mauvais">mauvais</option>
            </select>
           </div>
      </div>

      <div class="user__details">
        <div class="input__box">
          <span class="details">Etat du câble au pieds du mât</span>
         <select name="etatCable">
            <option value="" style="display: none;">Etat du câble au pieds du mât</option>
            <option value="bon">bon</option>
            <option value="mauvais">mauvais</option>
         </select>
        </div>
        <div class="input__box">NF 17 200</span>
              <input type="text"  name="nf" placeholder="NF 17 200">
        </div>
      </div>
      <div class="user__details">
        <div class="input__box">
          <span class="details">Type du support</span>
         <select name="typeSupport">
            <option value="" style="display: none;">Type du support</option>
            <option value="Poteau Bois">Poteau Bois</option>
            <option value="Console">Console</option>
            <option value="Candelabre">Candelabre</option>
            <option value="Bordure Lumineuse">Bordure Lumineuse</option>
            <option value="bra">bra</option>
            <option value="Cable En Acier">Cable En Acier</option>
            <option value="Colonne">Colonne</option>
            <option value="poteau béton">poteau béton</option>
            <option value="douielle E27">douielle E27</option>
            <option value="encastré au sol">encastré au sol</option>
         </select>
        </div>
        <div class="input__box">Nombre de Console</span>
              <input type="number"  name="nombreConsole" placeholder="Nombre de Console">
        </div>
      </div>

      <div class="user__details">
          <div class="input__box">Etat du support</span>
              <select name="etatSupport">
                 <option value="" style="display: none;">Etat du support</option>
                 <option value="bon">bon</option>
                 <option value="mauvais">mauvais</option>
              </select>
             </div>
        <div class="input__box">
          <span class="details">Disposition du support</span>
         <select name="dispositionSupport">
            <option value="" style="display: none;">Disposition du support</option>
            <option value="axial">axial</option>
            <option value="unilatérale">unilatérale</option>
            <option value="bilatérale">bilatérale</option>
         </select>
        </div>
      </div>


      <div class="user__details">
          <div class="input__box">Hauteur du support</span>
                <input type="text"  name="hauteurSupport" placeholder="Hauteur du support">
          </div>
        <div class="input__box">
          <span class="details">Etat du luminaire</span>
         <select name="etatLuminaire">
            <option value="" style="display: none;">Etat du luminaire</option>
            <option value="LED">LED</option>
            <option value="AUTRE">AUTRE</option>
         </select>
        </div>
      </div>
      <div class="user__details">
        <div class="input__box">Puissance lampe A</span>
              <input type="text"  name="puissanceA" placeholder="Puissance lampe A">
        </div>
        <div class="input__box">Puissance lampe B</span>
            <input type="text"  name="puissanceB" placeholder="Puissance lampe B">
      </div>
      <div class="input__box">Puissance lampe C</span>
        <input type="text"  name="puissanceC" placeholder="Puissance lampe C">
  </div>
  <div class="input__box">Puissance lampe D</span>
    <input type="text"  name="puissanceD" placeholder="Puissance lampe D">
</div>
    </div>
    <div class="user__details">
        <div class="input__box">Age support</span>
              <input type="text"  name="ageSupport" placeholder="Age support">
        </div>
      <div class="input__box">
        <span class="details">Support</span>
       <select name="support">
          <option value="" style="display: none;">Support</option>
          <option value="LED">bon</option>
          <option value="AUTRE">vetuste</option>
       </select>
      </div>
    </div>

      <div class="user__details">
        <div class="input__box">Age reseau</span>
              <input type="text"  name="ageReseau" placeholder="Age reseau">
        </div>
      <div class="input__box">
        <span class="details">Reseau</span>
       <select name="reseau">
          <option value="" style="display: none;">Reseau</option>
          <option value="LED">bon</option>
          <option value="AUTRE">vetuste</option>
       </select>
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
            var map = L.map('map').setView([latinput.value,loninput.value], 13);
            var marker = L.marker([latinput.value,loninput.value]).addTo(map);

            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);
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
