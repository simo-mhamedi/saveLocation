



<link href="{{ URL::asset('css/mainStyle/form.css') }}" rel="stylesheet" />
<style>
    select{
        width: 100%;
    padding: 10px;
    }
    .custum-file-upload {
        margin-left: auto;
    margin-right: auto;
  height: 200px;
  width: 300px;
  display: flex;
  flex-direction: column;
  align-items: space-between;
  gap: 20px;
  cursor: pointer;
  align-items: center;
  justify-content: center;
  border: 2px dashed #cacaca;
  background-color: rgba(255, 255, 255, 1);
  padding: 1.5rem;
  border-radius: 10px;
  box-shadow: 0px 48px 35px -48px rgba(0,0,0,0.1);
}

.custum-file-upload .icon {
  display: flex;
  align-items: center;
  justify-content: center;
}

.custum-file-upload .icon svg {
  height: 80px;
  fill: rgba(75, 85, 99, 1);
}

.custum-file-upload .text {
  display: flex;
  align-items: center;
  justify-content: center;
}

.custum-file-upload .text span {
  font-weight: 400;
  color: rgba(75, 85, 99, 1);
}

.custum-file-upload input {
  display: none;
}
.button {
    width: 100%;
  text-decoration: none;
  line-height: 1;
  border-radius: 1.5rem;
  overflow: hidden;
  position: relative;
  box-shadow: 10px 10px 20px rgba(0,0,0,.05);
  background-color: #fff;
  color: #121212;
  border: none;
  cursor: pointer;
}

.button-decor {
  position: absolute;
  inset: 0;
  background-color: var(--clr);
  transform: translateX(-100%);
  transition: transform .3s;
  z-index: 0;
}

.button-content {
  display: flex;
  align-items: center;
  font-weight: 600;
  position: relative;
  overflow: hidden;
}

.button__icon {
  width: 48px;
  height: 40px;
  background-color: var(--clr);
  display: grid;
  place-items: center;
}

.button__text {
  display: inline-block;
  transition: color .2s;
  padding: 2px 1.5rem 2px;
  padding-left: .75rem;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  max-width: 150px;
}

.button:hover .button__text {
  color: #fff;
}

.button:hover .button-decor {
  transform: translate(0);
}
#capturedImage{
    margin-bottom: 10px;
    display: block;
    width: 100%;
    border-radius: 11px;
}
#cameraPreview{
    margin-bottom: 20px;
    display: block;
    width: 100%;
    border-radius: 11px;
}
.custom-button {
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

/* Different class for a different button with modified styles */
.another-button {
  /* Your styles for the other button */
}

.another-button:hover {
  /* Hover styles for the other button */
}
#takePictureButton{
    margin-top: 10px;
}
#currPos{
margin-top: 10px;
margin-bottom: 10px;
}
.title{
    margin-bottom: 20px;
}
.button{
    border-radius:0px;
}
 .button input {
  width: 100%;
  outline: none;
  color: #fff;
  border: none;
  font-size: 18px;
  padding: 10px;
  font-weight: 500;
  margin-top: 10px;
  margin-bottom: 10px;
  border-radius: 0px;
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
            window.location.href = '/points';
        }
      </script>
</head>
@include("inc.pointnav")


<div class="container">
    <div class="button">
        <input onclick="goBack()" type="submit"  value="Retour">
    </div>
<div>

    <div class="title">Secteur</div>
    <div >
        <div class="user__details">
            <div class="input__box">
              <span class="details">secteur</span>
              <input type="text" style=" margin-bottom: 20px;" id="secteur" name="secteur" placeholder="secteur">
            </div>
<div id="error"></div>
<span class="details">image de secteur</span>

        <video id="cameraPreview" autoplay  style="display: none;margin-top:20px"></video>
        <canvas id="pictureCanvas" style="display: none" style="margin-top:20px !imp" ></canvas>
        <img id="capturedImage" style="display: none" style="margin-top:20px" />
        <a class="custom-button" id="cameraButton" style="margin-top:20px">
            <div class="svg-wrapper-1">
            </div>
            <span>Ouvrir la caméra</span>
        </a>
        <a class="custom-button" id="takePictureButton">
            <div class="svg-wrapper-1">
            </div>
            <span>Prendre une photo</span>
        </a>
        <div class="button">
            <input type="submit"  id="getLocation" value="Suivant">
        </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>

<script>

    document.addEventListener("DOMContentLoaded", (event) => {

        document.getElementById('getLocation').addEventListener('click', function() {
            // Check if geolocation is available in the browser
          // Capture the image data (you need to replace 'imageData' with the actual image data)
                    var imageData = capturedImage.src;
                    var secteur=document.querySelector("#secteur").value;
                    // Send the location to the server using AJAX
                    $.ajax({
                        url: '/save-location-point',
                        method: 'POST',
                        data: {
                            secteur:secteur,
                            image:imageData ?? "",
                            _token: "{{ csrf_token() }}" // Include CSRF token for Laravel
                        },
                        success: function(response) {
                            if(response.message==="armoir")
                            {
                                window.location.href = '/armoir/data';
                            }
                            else{
                                window.location.href = '/point/data';
                            }
                        },
                        error: function() {
                        }
                    })
        });
    $(document).ready(function() {
        let $ = document.querySelector.bind(document);
        let options = {
            enableHighAccuracy: true,
            timeout: 5000,
            maximumAge: 0
        };





        function onGeoError(error) {
            let detailError;

            if(error.code === error.PERMISSION_DENIED) {
            detailError = "User denied the request for Geolocation.";
            }
            else if(error.code === error.POSITION_UNAVAILABLE) {
            detailError = "Location information is unavailable.";
            }
            else if(error.code === error.TIMEOUT) {
            detailError = "The request to get user location timed out."
            }
            else if(error.code === error.UNKNOWN_ERROR) {
            detailError = "An unknown error occurred."
            }

            $("#error").innerHTML = `Error: ${detailError}`;
        }
        const cameraButton = document.getElementById('cameraButton');
        const takePictureButton = document.getElementById('takePictureButton');
        const retakePictureButton = document.getElementById('retakePictureButton');
        const cameraPreview = document.getElementById('cameraPreview');
        const pictureCanvas = document.getElementById('pictureCanvas');
        const capturedImage = document.getElementById('capturedImage');
        takePictureButton.style.display = 'none';

        let mediaStream = null;

        cameraButton.addEventListener('click', async () => {
            if (mediaStream) {
                mediaStream.getTracks().forEach(track => track.stop());
            }

            try {
                mediaStream = await navigator.mediaDevices.getUserMedia({ video: true });
                cameraPreview.srcObject = mediaStream;
                cameraPreview.style.display = 'block';
                takePictureButton.disabled = false;
                capturedImage.style.display = 'none';
                takePictureButton.style.display = 'block';
                retakePictureButton.style.display = 'none';
            } catch (error) {
                console.error('Error accessing the camera:', error);
            }
        });

        takePictureButton.addEventListener('click', () => {
            if (mediaStream) {
                const context = pictureCanvas.getContext('2d');
                pictureCanvas.width = cameraPreview.videoWidth;
                pictureCanvas.height = cameraPreview.videoHeight;
                context.drawImage(cameraPreview, 0, 0, pictureCanvas.width, pictureCanvas.height);

                const imageURL = pictureCanvas.toDataURL('image/png');
                capturedImage.src = imageURL;
                capturedImage.style.display = 'block';
                cameraPreview.style.display = 'none';
                takePictureButton.style.display = 'none';

                console.log(imageURL);
            }
        });

        retakePictureButton.addEventListener('click', () => {
            capturedImage.style.display = 'none';
            cameraPreview.style.display = 'block';
            takePictureButton.style.display = 'block';
            retakePictureButton.style.display = 'none';
        })
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
console.log(document.getElementById('getLocation'));

    });})
</script>
