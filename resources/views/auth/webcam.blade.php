
<a href="#modal1" class="r-dropzone input-field modal-trigger">
   <span id="show-before-capture" >
       Take a picture
   </span>
    <div id="show-after-capture" class="r-d-flex r-w-100% r-al-i-c r-j-c-sb r-py-hh" style="display: none">
        <img id ="captureimage"src="{{ asset('assets/images/avatar.jpg') }}" class="r-avatar r-avatar--medium r-suffix">
        <span>Retake?</span>
        <span class="r-co-primary r-prefix">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        </span>
    </div>
</a>
<span id="webcamerror" class="invalid-feedback r-fs-pico r-red" role="alert">
                            <strong>Picture must be uploaded</strong>
</span>

<div id="modal1" class="modal" tabindex="0">
    <div class="modal-content">
        <div id="snapcontent">
        <video id="webcam" autoplay playsinline class ="webcamvideo"></video>
        <canvas id="canvas" class="d-none" style="display: none"></canvas>
        <audio id="snapSound" src="{{ asset('snap.wav') }}" preload = "auto"></audio>
        </div>
        <div class="webcamvideo" id ="pictureCapture"></div>
    </div>
    <a href="#!" class="modal-close">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </a>

    <div class="r-flex r-j-c-c r-mt-1 r-mb-2">
        <a class="r-btn r-btn--primary r-py-1"  onclick="snapPicture()">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-camera"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
            <span class="r-suffix">
                Capture
            </span>
        </a>
    </div>

</div>
@section('footerscripts')
    <script>

        let instanceModal,picture;
        let webcam,webcamElement,canvasElement,snapSoundElement;
        const snapcontent = document.getElementById('snapcontent');
        let rankdiv = document.getElementById('rankid');
        let showaftercapture = document.getElementById('show-after-capture');
        let captureimage = document.getElementById('captureimage');
        let showbeforecapture = document.getElementById('show-before-capture');
        let webcamerror = document.getElementById('webcamerror');
        let securityerror = document.getElementById('securityerror');
        let stateerror = document.getElementById('stateerror');
        rankdiv.style.display = "none";
        webcamerror.style.display = "none";
        securityerror.style.display = "none";
        stateerror.style.display = "none";
        document.addEventListener('DOMContentLoaded', function () {
            const optionsModal = {
                onOpenStart: () => {
                    openCamera();
                },
                onCloseEnd: () => {
                    // console.log("close modal");
                    endSnap();
                }
            }
            let Modalelem = document.querySelector('.modal');
             instanceModal = M.Modal.init(Modalelem, optionsModal);
        });


    function openCamera(){
         snapcontent.style.display = "block";
         webcamElement = document.getElementById('webcam');
         canvasElement = document.getElementById('canvas');
         snapSoundElement = document.getElementById('snapSound');
         webcam = new Webcam(webcamElement, 'user', canvasElement, snapSoundElement);
         webcam.start()
        .then(result =>{
            // console.log("result",result);
        })
        .catch(err => {
            console.log(err);
        });

        }
        function snapPicture(){
            event.preventDefault();
            showaftercapture.style.display = "flex";
            webcamerror.style.display = "none";
            showbeforecapture.style.display = "none";
            picture = webcam.snap();
            let pictureinput = document.createElement("input");
            pictureinput.setAttribute("type", "hidden");
            pictureinput.setAttribute("name", "picture_url");
            pictureinput.setAttribute("value", picture);
            document.getElementById("registrationform").appendChild(pictureinput);
            captureimage.src =picture;
            instanceModal.close();

        }
        function endSnap(){
            webcam.stop();
        }


        function getRanks() {
            securityerror.style.display = "none";
            var id = $('#securities').find(":selected").val();
            rankdiv.style.display = "block";
            var rankselect = document.getElementById("rankselect");
            console.log("rank select",rankselect);
            $('#rankselect').empty();
            var getrankurl = "/api/rank/" + id ;
            $.ajaxSetup({
                headers:{
                    'clientid': "{{config('constants.client')}}"
                }
            });
            $.get(getrankurl, function (data) {
                if (data.status == "success") {
                    data = data.data;
                        for(let i in data)
                        {
                            let opt = document.createElement("option");
                            opt.value= data[i].id;
                            opt.innerHTML = data[i].name;
                            rankselect.appendChild(opt);
                        }
                }

            }).fail(function (error) {
                console.log("error");
                // $('.bankerror').show();
            })


        }
        function validateRegister(){
        let chk = true;
        if(!picture) {webcamerror.style.display = "block";chk= false;}
        let secu = $('#securities').find(":selected").val();
        if(!secu) {securityerror.style.display = "block";chk = false;}
        let state = $('#states').find(":selected").val();
        if(!state) {stateerror.style.display = "block";chk = false;}
        return chk;
        }



    </script>
@endsection
