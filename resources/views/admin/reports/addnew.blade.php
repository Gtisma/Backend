@extends('admin.layouts.maindashboard')

@section('content')

    <section class="r-split-twin_content r-gutter--bottom r-d-flex r-flex-dir-col r-al-i-l r-tx-l r-gutter--2x@lg r-edges">
        <h2 class="r-sr">Add New Report</h2>


        <div class="r-w-100% r-maxwidth-xs">
            <h3 class="r-mt-0 r-headline--small">Add New Report</h3>

            <div class="r-tx-l">
                <form method="POST" action="{{ route('admin.store.report') }}" id="reportform"  enctype="multipart/form-data" >
                    @csrf

                    <p class="r-select-wrapper r-mb-0">
                        <label for="states">State</label>
                        <select name="state_id" id ="states" class="browser-default">
{{--                            <option value="" disabled selected>Choose your State</option>--}}
                            @if(isset($states) && count($states) > 0)
                                @foreach($states as $state)
                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach
                            @endif
                        </select>

                    </p>
                    <p class="r-select-wrapper r-mb-0">
                        <label for="crimetypes">Crime Types</label>
                        <select name="crime_type_id" id ="securities" onchange="getRanks()" class="browser-default">
{{--                            <option value="" disabled selected>Choose Crime Type</option>--}}
                            @if(isset($crimetypes) && count($crimetypes) > 0)
                                @foreach($crimetypes as $crimetype)
                                    <option value="{{$crimetype->id}}">{{$crimetype->name}}</option>
                                @endforeach
                            @endif
                        </select>

                    </p>
                    <div class="r-select-wrapper r-mb-0">
                        <label class="r-file">
                            <input type="file" id="report_files" aria-label="Report file browser " onchange="return RecordfileTypeValidate(this)" name="report_files[]"  class="" accept="audio/*,image/*,video/mp4,video/x-m4v,video/*" multiple required/>
                            <span class="r-file-custom"></span>
                        </label>
                        <p class="js-filename-block r-ml-h r-mb-h r-mt-hh r-italic r-opacity-06">
                            <span id="js-filename" class="js-filename">Filename.png,</span>
                        </p>
                        <span id="fileerror" class="r-italic r-fs-pico r-red">
                        </span>
                    </div>
                    <div class="input-field r-d-flex">
                        <textarea id="contact-address" name="address" class="materialize-textarea" required >CubeHub, Adebola House (Suite 100), 38, Opebi Road, Ikeja Lagos, Nigeria.</textarea>
                        <label for="contact-address">Address</label>
                    </div>
                    <div class="input-field r-d-flex">
                        <textarea id="contact-address" name="description" class="materialize-textarea" required>Type here...</textarea>
                        <label for="contact-address">Description</label>
                    </div>

                    <button  type="submit" class="r-btn r-btn--primary r-btn--match-input r-btn--left-floated-icon input-field r-btn-spinner">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round" class="icon icon-unlock">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
                            <path d="M7 11V7a5 5 0 0 1 9.9-1" />
                        </svg>
                        <span class="r-fw-medium r-btn_text"> {{ __('Add Report') }}</span>
                        <div class="r-spinner r-pos-a r-right-edge">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>


                </form>

            </div></div>
    </section>
@endsection
@section('footerscripts')
    <script>
        function RecordfileTypeValidate(files){

        $("#fileerror").text("");
        var fdata = document.getElementById('report_files');
        if (fdata.files.length > 0) {
            var filename=[];
            for (var i = 0; i < fdata.files.length; i++) {
                var fsize = fdata.files.item(i).size;
                var file = Math.round((fsize / 1024));
                // The size of the file.
                if (file > 3072) {
                    $("#fileerror").text("File must be less than 3MB,Try Again ");
                    fdata.value = '';
                    return false;
                }
                filename[i]=fdata.files.item(i).name;
            }
            $("#fileerror").text("");
            $("#js-filename").text(filename.toString());


            return true;
        }

    }
    </script>
@endsection
