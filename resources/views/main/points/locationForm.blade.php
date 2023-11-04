



<link href="{{ URL::asset('css/mainStyle/form.css') }}" rel="stylesheet" />
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
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
.new-container {
  height: 300px;
  width: 300px;
  border-radius: 10px;
  box-shadow: 4px 4px 30px rgba(0, 0, 0, .2);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-between;
  padding: 10px;
  gap: 5px;
  background-color: rgba(0, 110, 255, 0.041);
}

.new-header {
  flex: 1;
  width: 100%;
  border: 2px dashed royalblue;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}

.new-header svg {
  height: 100px;
}

.new-header p {
  text-align: center;
  color: black;
}

.new-footer {
  background-color: rgba(0, 110, 255, 0.075);
  width: 100%;
  height: 40px;
  padding: 8px;
  border-radius: 10px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: flex-end;
  color: black;
  border: none;
}

.new-footer svg {
  height: 130%;
  fill: royalblue;
  background-color: rgba(70, 66, 66, 0.103);
  border-radius: 50%;
  padding: 2px;
  cursor: pointer;
  box-shadow: 0 2px 30px rgba(0, 0, 0, 0.205);
}

.new-footer p {
  flex: 1;
  text-align: center;
}

#file {
  display: none;
}
</style>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        function displayImage(input) {
            var uploadedImage = document.getElementById('uploaded-image');
            var uploadedSvg = document.getElementById('uploaded-svg');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    var fileContent = e.target.result;

                    if (input.files[0].name.toLowerCase().endsWith('.svg')) {
                        // Display the uploaded SVG
                        uploadedImage.style.display = 'none';
                        uploadedSvg.style.display = 'block';
                        uploadedSvg.innerHTML = fileContent;
                    } else {
                        // Display the uploaded image (e.g., PNG, JPG, etc.)
                        uploadedSvg.style.display = 'none';
                        uploadedImage.style.display = 'block';
                        uploadedImage.src = fileContent;
                    }
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                // Hide both image and SVG when no file is selected
                uploadedImage.style.display = 'none';
                uploadedSvg.style.display = 'none';
            }
        }
        onchange = "displayImage(this)"

        function goBack() {
            window.location.href = '/borough';
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
<div class="user__details">
    <div class="input__box">
        <span class="details">Numero</span>
        <select name="Numero" id="numero">
            <option value="" style="display: none;">Numero</option>
            @foreach($armoirs as $armoir)
                <option value="{{ $armoir->numero }}">{{ $armoir->numero }}</option>
            @endforeach
        </select>
    </div>
</div>

<span class="details">image de secteur</span>
<div class="new-container">
    <div class="new-header">
      <img id="uploaded-image" src=""  alt="Uploaded Image" style="width:100%;display: none;">
      <svg id="uploaded-svg" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier">
        <path d="M7 10V9C7 6.23858 9.23858 4 12 4C14.7614 4 17 6.23858 17 9V10C19.2091 10 21 11.7909 21 14C21 15.4806 20.1956 16.8084 19 17.5M7 10C4.79086 10 3 11.7909 3 14C3 15.4806 3.8044 16.8084 5 17.5M7 10C7.43285 10 7.84965 10.0688 8.24006 10.1959M12 12V21M12 12L15 15M12 12L9 15" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>     <p>Browse File to upload!</p>
    </div>
    <label for="file" class="new-footer">
      <svg fill="#000000" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M15.331 6H8.5v20h15V14.154h-8.169z"></path><path d="M18.153 6h-.009v5.342H23.5v-.002z"></path></g></svg>     <p>Not selected file</p>
    </label>
    <input id="file" onchange="displayImage(this)" type="file">
  </div>
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
          var photoInput = document.querySelector("#file");
                var secteur = document.querySelector("#secteur").value;
                var numero = document.querySelector("#numero").value;
                var formData = new FormData();
                formData.append('photo', photoInput.files[0]);
                formData.append('secteur', secteur);
                formData.append('numero', numero);
                // Send the location to the server us
                    $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '/save-location-point',
                    method: 'POST',
                    data: formData,
                    processData: false, // Important! To prevent jQuery from processing the FormData
                    contentType: false,
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
                mediaStream = await navigator.mediaDevices.getUserMedia({ video: { facingMode: 'environment' } });
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
