
<a href="#modal1" class="r-dropzone input-field modal-trigger">
   Take a picture
</a>

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
        <button class="r-btn r-btn--primary r-py-1" onclick="snapPicture()">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-camera"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
            <span class="r-suffix">
                Capture
            </span>
        </button>
    </div>

</div>

<div id="download-photo"></div>
@section('footerscripts')
    <script>

        let webcam,webcamElement,canvasElement,snapSoundElement;
        const picturecapture = document.getElementById('pictureCapture');
        const snapcontent = document.getElementById('snapcontent');
        let rankdiv = document.getElementById('rankid');
        picturecapture.style.display = "none";
        rankdiv.style.display = "none";
        document.addEventListener('DOMContentLoaded', function () {
            const optionsModal = {
                onOpenStart: () => {
                    openCamera();
                },
                onCloseEnd: () => {
                    console.log("close modal");
                    endSnap();
                }
            }
            var Modalelem = document.querySelector('.modal');
            var instanceModal = M.Modal.init(Modalelem, optionsModal);
        });


    function openCamera(){
         snapcontent.style.display = "block";
         picturecapture.style.display = "none";
         webcamElement = document.getElementById('webcam');
         canvasElement = document.getElementById('canvas');
         snapSoundElement = document.getElementById('snapSound');
         webcam = new Webcam(webcamElement, 'user', canvasElement, snapSoundElement);
         webcam.start()
        .then(result =>{
            console.log("result",result);
            console.log("webcam started");
        })
        .catch(err => {
            console.log(err);
        });

        }
        function snapPicture(){
            let picture = webcam.snap();
            picturecapture.href = picture;
            picturecapture.style.display = "block";
            snapcontent.style.display = "none";

        }
        function endSnap(){
            webcam.stop();
            console.log("Stop",webcam);
            picturecapture.style.display = "none";
        }

        function getRanks2(){
            var id = $('#securities').find(":selected").val();
            var option = document.createElement("option");
            rankdiv.style.display = "block";
            if(id != undefined ) {
                var getranks = "/api/rank/" + id ;
                $.ajaxSetup({
                    headers:{
                        'clientid': "mobileclientpqqh6ebizhTecUpfb0qA"
                    }
                });
                $.get(getranks, function (data) {
                    console.log("data",data.data);
                    // if (data.status == "success") {
                    //     $('#bal').text("(Balance : NGN "+ data.data +")");
                    // }

                    if (data.status == "success") {
                        var len = data.data.length;
                        data = data.data;
                        if (len > 0) {
                            for (var i = 0; i < len; i++) {
                                option.text = data[i].name;
                                option.value = data[i].id;
                                rankselect.appendChild(option);
                            }
                        } else {
                            // $('.bankerror').show();
                        }
                    }

                }).fail(function (error) {
                    console.log("errror",error);
                });
            }
        }
        function getRanks() {
            var id = $('#securities').find(":selected").val();
            rankdiv.style.display = "block";
            var rankselect = document.getElementById("rankselect");
            console.log("rank select",rankselect);
            $('#rankselect').empty();
            var getrankurl = "/api/rank/" + id ;
            $.ajaxSetup({
                headers:{
                    'clientid': "mobileclientpqqh6ebizhTecUpfb0qA"
                }
            });
            $.get(getrankurl, function (data) {
                if (data.status == "success") {
                    data = data.data;

                        for(i in data)
                        {
                            var opt = document.createElement("option");
                            opt.value= data[i].id;
                            opt.innerHTML = data[i].name; // whatever property it has
                            console.log("options",opt);
                            // then append it to the select element
                            rankselect.appendChild(opt);
                        }
                        // for(var i = 0 ; i <len ; i++ ){
                        //     var option = document.createElement("option");
                        //     option.text = data[i].name;
                        //     option.value = data[i].id;
                        //     console.log("options",option);
                        //     rankselect.append(option);
                        // }

                }


            }).fail(function (error) {
                console.log("error");
                $('.bankerror').show();
            })


        }


    </script>
@endsection
