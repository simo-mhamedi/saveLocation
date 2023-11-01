



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
  margin-bottom: 10px;
  border-radius: 0px;
  padding: 10px;
  background: linear-gradient(135deg, var(--main-blue), var(--main-purple));
  transition: all 0.3s ease;
}

 .button input:hover {
  background: linear-gradient(-135deg, var(--main-blue), var(--main-purple));
}
</style>
<head>
    <script>
        function goBack() {
            window.location.href = '/';
        }
      </script>
</head>
@include("inc.pointnav")


<div class="container">

    <div class="button">
        <input onclick="goBack()" type="submit"  id="getLocation" value="Retour">
    </div>
<div>
    </div>
    <div class="title">Arrondissement</div>
    <form role="form" method="POST" action="{{ route('sendarrondissementPoint') }}">
        @csrf
      <div class="user__details">
        <div class="input__box">
          <span class="details">Arrondissement</span>
          <select name="arrondissement">
            <option value="" style="display: none;">Arrondissement</option>
            <option value="Bni Makada" {{ isset($data['arrondissement']) && $data['arrondissement'] == 'Bni Makada' ? 'selected' : '' }}>Bni Makada</option>
            <option value="Charf-Mghogha" {{ isset($data['arrondissement']) && $data['arrondissement'] == 'Charf-Mghogha' ? 'selected' : '' }}> Charf-Mghogha</option>
            <option value="Charf-Souani" {{ isset($data['arrondissement']) && $data['arrondissement'] == 'Charf-Souani' ? 'selected' : '' }}>Charf-Souani</option>
            <option value="Tanger-Médina" {{ isset($data['arrondissement']) && $data['arrondissement'] == 'Tanger-Médina' ? 'selected' : '' }}>Tanger-Médina</option>
        </select>
        </div>
      </div>

      <div class="button">
        <input type="submit"  id="getLocation" value="Suivant">
      </div>
    </form>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", (event) => {

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


        $('#getLocation').click(function() {
            // Check if geolocation is available in the browser
            if ("geolocation" in navigator) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    // Get the latitude and longitude
                    var latitude = position.coords.latitude;
                    var longitude = position.coords.longitude;
                    console.log(latitude+ latitude);
                    // Send the location to the server using AJAX
                    $.ajax({
                        url: '/save-location-armoir',
                        method: 'POST',
                        data: {
                            latitude: latitude,
                            longitude: longitude,
                            _token: "{{ csrf_token() }}" // Include CSRF token for Laravel
                        },
                        success: function(response) {
                            alert('Location saved successfully.');
                            location.reload(); // This will reload the page
                        },
                        error: function() {
                        }
                    });
                });
            } else {
                alert('Geolocation is not supported in your browser.');
            }
        });
    });
    })
</script>
