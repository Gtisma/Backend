@extends('admin.layouts.maindashboard')

@section('content')
    <section class="r-section r-section--padded r-edges">
        <div class="element-header">
            @if (session('message'))
                <div class="alert alert-info r-blue" >
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <div class="r-section-title r-no-border r-pt-2 r-pt-1@xl">
            <h2 class="r-m-0">Report Details</h2>
            @if($report->status === "pending")
            <a href="{{url('/admin/report/approve/'.$report->id)}}" class="r-d-flex r-al-i-c r-btn r-btn--action">
                <span class="r-fw-medium r-btn_icon-adjust">Approve Report</span>
            </a>
            @else
                <button class="r-d-flex r-al-i-c r-btn r-btn--success">
                    <span class="r-fw-medium r-btn_icon-adjust">Report Approved</span>
                </button>
            @endif
        </div>
        <div class="r-split-twin r-grid--gap">
            <div class="r-split-twin_figure r-mb-2 no-slanting height-auto element-header">
                @if(isset($report->reportcontent) && count($report->reportcontent) > 0)
                    <div class="main-carousel">
                    @foreach($report->reportcontent as $rcontent)
                    @if($rcontent->report_type_id ==2)
                    <div class="carousel-cell video-wrap">
                        <iframe
                            src="{{$rcontent->file_url}}"
                            frameborder="0"
                            allowfullscreen>
                        </iframe>
                        <div class="video-wrap__grippy"></div>
                        <div class="video-wrap__grippy"></div>
                    </div>
                            @elseif($rcontent->report_type_id == 1)
                    <div class="carousel-cell"> <img src="{{$rcontent->file_url}}" alt="Report" /></div>
                            @else
                    <div class="carousel-cell">
                        <audio controls class="r-audio">
                            <source src="{{$rcontent->file_url}}">
                        </audio>
                    </div>
                            @endif
                        @endforeach
                </div>
                @else
                    <p>No Report Content Uploaded</p>
                    @endif


            </div>
            <div class="r-split-twin_content r-w-100%">
                <ul class="r-none r-al-i-c">
                    <li class="tab">
                        <p class="active r-none r-edges--as-gutter r-caps r-caps--micro r-fw-bold">
                            CRIME TYPE: <span>{{$report->crimetype->name ?? ""}}</span>
                        </p>
                    </li>
                    <li class="tab">
                        <p class="active r-none r-edges--as-gutter r-caps r-caps--micro r-fw-bold">
                            REPORTED BY: <span>{{($report->user->first_name ?? " ")." ".($report->user->last_name ?? "") ."(".$report->user->getRoleNames()[0].")"}} </span>
                        </p>
                    </li>
                    <li class="tab">
                        <p class="active r-none r-edges--as-gutter r-caps r-caps--micro r-fw-bold">
                            REPORTED BY EMAIL: <span>{{$report->user->email ?? " "}}</span>
                        </p>
                    </li>
                    <li class="tab">
                        <p class="active r-none r-edges--as-gutter r-caps r-caps--micro r-fw-bold">
                            REPORTED BY PHONENUMBER: <span>{{$report->user->phone ?? " "}}</span>
                        </p>
                    </li>
                    <li class="tab">
                        <p class="active r-none r-edges--as-gutter r-caps r-caps--micro r-fw-bold">
                            DESCRIPTION: <span>{{$report->description}}</span>
                        </p>
                    </li>
                    <li class="tab">
                        <p class="active r-none r-edges--as-gutter r-caps r-caps--micro r-fw-bold">
                            LOCATION: <span>{{$report->location}}</span>
                        </p>
                    </li>
                    <li class="tab">
                        <p class="r-none r-edges--as-gutter r-caps r-caps--micro r-fw-bold">
                            ADDRESS: <span>{{$report->address}}</span>
                        </p>
                    </li>
                    <li class="tab">
                        <p class="active r-none r-edges--as-gutter r-caps r-caps--micro r-fw-bold">
                            STATE: <span>{{$report->state->name}}</span>
                        </p>
                    </li>
                    <li class="tab">
                        <p class=" r-none r-edges--as-gutter r-caps r-caps--micro r-fw-bold">
                            STATUS: <span>{{$report->status}}</span>
                        </p>
                    </li>
                    <li class="tab">
                        <p class=" r-none r-edges--as-gutter r-caps r-caps--micro r-fw-bold">
                            DATE REPORTED: <span>{{$report->created_at}}</span>
                        </p>
                    </li>
                    <li class="tab">
                        <p class=" r-none r-edges--as-gutter r-caps r-caps--micro r-fw-bold">
                            APPROVED BY: <span>{{isset($report->reportapproval) ? ($report->reportapproval->user->first_name ?? "")." ". ($report->reportapproval->user->last_name ?? "") :"NOT APPROVED"}}</span>
                        </p>
                    </li>
                    <li class="tab">
                        <p class=" r-none r-edges--as-gutter r-caps r-caps--micro r-fw-bold">
                            DATE APPROVED: <span>{{isset($report->reportapproval)? ($report->reportapproval->created_at ?? "") :"NO DATE OF APPROVAL"}}</span>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection

@section('footerscripts')
    <script>
    $('.main-carousel').flickity({
    // options
    cellAlign: 'center',
    contain: true
    });
    </script>
@endsection
