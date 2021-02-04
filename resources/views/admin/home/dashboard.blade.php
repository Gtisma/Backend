@extends('admin.layouts.maindashboard')

@section('content')
                    <section class="r-section r-section--padded r-pt-0@xl">
                        <h2 class="sr">Welcome</h2>
                        <div class="r-grid r-grid--1-7-5@md r-grid--gap">
                            <div class="r-media-object">
                                <figure class="r-media-object_figure--adjust@md">

                                    <img src="{{$user->picture_url ?? asset('assets/images/userprofile.png') }}" alt="User image" class="r-avatar r-avatar--large-to-xlarge@md r-avatar--border--linen">
                                </figure>
                                <div class="r-media-object_body">
                                    <span class="r-caps r-caps--nano r-opacity-07 r-fw-bold">Welcome back,</span>
                                    <h3 class="r-m-0 r-headline--small r-gutter--bottom-quarter">{{$user->first_name}}!</h3>
                                    <p class="r-mb-0 r-fs-micro r-co-black r-opacity-08 r-maxwidth-xxs">
                                        Here's an overview of your Report Record.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="r-section r-section--padded r-pt-0">
                        <h2 class="sr">Report Cases </h2>
                        <div class="r-gutter r-edges--as-gutter r-gradient r-gradient--primary r-br--all"><div class="r-grid r-grid--gap r-grid--1-6@md r-al-i-c r-card-height--minimum">
                                <div class="r-w-100% r-tx-c@md r-gutter--half r-gutter--bottom-23rd@md-down r-border-right--as-divider@md r-border--light">
                                    <a class="r-none" href="{{url('/admin/report')}}">
                                    <h3 class="r-m-0 r-co-white r-caps r-caps--nano r-opacity-07 r-fw-bold">Total Reported Cases</h3>
                                    <p class="r-mb-0 r-co-white r-num">
                                        {{$totalreport??0}}
                                    </p>
                                    <p class="r-mb-0 r-co-white r-opacity-07 r-fw-medium r-fs-nano">
                                        Total from all report gotten.
                                    </p>
                                    </a>
                                </div>
                                <div class="r-w-100% r-tx-c@md r-gutter--half">
                                    <a class="r-none" href="{{url('/admin/user/eyewitness')}}">
                                    <h3 class="r-m-0 r-co-white r-caps r-caps--nano r-opacity-07 r-fw-bold">Total EyeWitness</h3>
                                    <p class="r-mb-0 r-co-white r-num">
                                        {{$totaleyewitness??0}}
                                    </p>
                                    <p class="r-mb-0 r-co-white r-opacity-07 r-fw-medium r-d-flex r-al-i-c r-j-c-c@md r-fs-nano">
                                         All Eyewitness up to date.
                                    </p>
                                    </a>
                                </div>

                            </div></div>
                    </section>
                    <section class="r-section r-section--padded">
                        <h2 class="sr">Report Breakdown</h2>
                        <div class="r-grid r-grid--1-6@md r-grid--gap">
                            <div>
                                <div class="r-section-title">
                                    <h3 class="r-section-title_title">
                                        Current Rape Cases
                                    </h3>
                                    <a href="{{url('/admin/report/crimetype/1')}}" class="r-d-flex r-al-i-c r-fw-bold r-decoration-none r-read-more r-icon-move-on-hover">
                                        <span class=" r-prefix">View all</span><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round" class="icon icon-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12" />
                                            <polyline points="12 5 19 12 12 19" />
                                        </svg></a>
                                </div><ul class="r-none r-grid r-grid--gap r-grid--autosize"><li class="r-grid_item r-w-100% r-d-flex r-co-white">
                                        <a href="{{url('/admin/report/approved')}}" class="r-none r-w-100% r-card r-card--literal r-gradient r-gradient--green">
                                            <div class="r-d-flex r-al-i-c r-j-c-sb r-mt-adjust--line-height">
                                                <p class="r-mb-0 r-co-white">
                                                    <span class="r-caps r-caps--nano r-fw-bold r-opacity-09">Total Approved Report</span>
                                                    <span class="r-d-block r-fs-nano r-tt-l r-opacity-07"></span>
                                                </p>

                                            </div>
                                            <div class="r-big-number r-big-number--minimal r-card--literal_middle r-d-flex r-al-i-c r-j-c-c ">
                                                <p class="r-co-white r-big-number_number r-mb-0 r-d-flex r-al-i-c">
                        <span class="r-big-number_amount">
                            {{$approvedreport??0}}
                        </span>
                                                </p>
                                            </div>
                                            <p class="r-card--literal_footer r-mb-0 r-co-white">
                    <span class="r-d-flex r-al-i-bs">

                        <span class="r-fs-nano r-tt-l r-opacity-07 r-suffix--smaller">

                        </span>
                    </span>
                                            </p>
                                        </a>
                                    </li><li class="r-grid_item r-w-100% r-d-flex r-co-white">
                                        <a href="{{url('/admin/report/pending')}}" class="r-none r-w-100% r-card r-card--literal r-gradient r-gradient--blue">
                                            <div class="r-d-flex r-al-i-c r-j-c-sb r-mt-adjust--line-height">
                                                <p class="r-mb-0 r-co-white">
                                                    <span class="r-caps r-caps--nano r-fw-bold r-opacity-09">Total Pending Report</span>
                                                    <span class="r-d-block r-fs-nano r-tt-l r-opacity-07">
                        </span>
                                                </p>

                                            </div>
                                            <div class="r-big-number r-big-number--minimal r-card--literal_middle r-d-flex r-al-i-c r-j-c-c ">
                                                <p class="r-co-white r-big-number_number r-mb-0 r-d-flex r-al-i-c">
                        <span class="r-big-number_amount">
                             {{$pendingreport??0}}
                        </span>
                                                </p>
                                            </div>
                                            <p class="r-card--literal_footer r-mb-0 r-co-white">
                    <span class="r-d-flex r-al-i-bs">

                        <span class="r-fs-nano r-tt-l r-opacity-07 r-suffix--smaller">

                        </span>
                    </span>
                                            </p>
                                        </a>
                                    </li></ul></div>
                            <div>
                                <div class="r-section-title">
                                    <h3 class="r-section-title_title">
                                        Crime Types
                                    </h3>
                                    <a href="{{url('/admin/crimetype')}}" class="r-d-flex r-al-i-c r-fw-bold r-decoration-none r-read-more r-icon-move-on-hover">
                                        <span class=" r-prefix">View all</span><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round" class="icon icon-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12" />
                                            <polyline points="12 5 19 12 12 19" />
                                        </svg></a>
                                </div><ul class="r-none r-grid r-grid--gap r-grid--autosize"><li class="r-grid_item r-w-100% r-d-flex">
                                        <a href="{{url('/admin/report/crimetype/1')}}" class="r-none r-w-100% r-card r-card--no-shadow r-card--border r-card--border--secondary r-card--literal r-d-flex r-flex-dir-col r-pb-0">
                                            <div class="r-grid r-grid--8-4 r-grid--gap">
                                                <h3 class="r-m-0 r-fs-micro">Total Rape Cases</h3>
                                                <p class="r-mb-0 r-tx-c">
                                                    <span class="r-fs-small r-fw-bold r-co-green"></span>
                                                    <span class="r-caps r-caps--pico r-d-block r-tt-l r-opacity-07 r-fw-bold">

                        </span>
                                                </p>
                                            </div>
                                            <div class="r-flex_main r-d-flex r-flex-dir-col r-al-i-c r-j-c-c">
                    <span class="r-caps r-caps--nano r-opacity-07 r-fw-bold">
                        Cases
                    </span>
                                                <p class="r-mb-0 r-co-black r-big-number--minimal r-big-number_amount">
                                                    {{$rapecases??0}}</p>
                                                <p class="r-mb-0 r-fw-medium r-fs-nano r-d-flex r-al-i-c">
                        <span class="r-co-green r-lh-0 r-icon--nano r-prefix--smaller"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 123.959 123.959" fill="currentColor" class="icon icon-triangle-up">
        <g>
            <path d="M66.18,29.742c-2.301-2.3-6.101-2.3-8.401,0l-56,56c-3.8,3.801-1.1,10.2,4.2,10.2h112c5.3,0,8-6.399,4.2-10.2L66.18,29.742   z" />
        </g>
    </svg></span>
                                                    <span class="r-opacity-07">
                            <span>

                            </span>
                        </span>
                                                </p>
                                            </div>
                                            <div class="r-caps r-caps--nano r-fw-bold r-gutter--half r-border-top r-tx-c r-co-secondary">
                                                View More
                                            </div>
                                        </a>
                                    </li><li class="r-grid_item r-w-100% r-d-flex">
                                        <a href="{{url('/admin/report/crimetype/2')}}" class="r-none r-w-100% r-card r-card--no-shadow r-card--border r-card--border--secondary r-card--literal r-d-flex r-flex-dir-col r-pb-0">
                                            <div class="r-grid r-grid--8-4 r-grid--gap">
                                                <h3 class="r-m-0 r-fs-micro">Kidnapping</h3>
                                                <p class="r-mb-0 r-tx-c">
                                                    <span class="r-fs-small r-fw-bold r-co-green"></span>
                                                    <span class="r-caps r-caps--pico r-d-block r-tt-l r-opacity-07 r-fw-bold">

                        </span>
                                                </p>
                                            </div>
                                            <div class="r-flex_main r-d-flex r-flex-dir-col r-al-i-c r-j-c-c">
                    <span class="r-caps r-caps--nano r-opacity-07 r-fw-bold">
                        Cases
                    </span>
                                                <p class="r-mb-0 r-co-black r-big-number--minimal r-big-number_amount">
                                                    {{$kidnapcases??0}}
                                                </p>
                                                <p class="r-mb-0 r-fw-medium r-fs-nano r-d-flex r-al-i-c">
                        <span class="r-co-danger r-lh-0 r-icon--nano r-prefix--smaller"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 123.959 123.958" fill="currentColor" class="icon icon-triangle-down">
        <g>
            <path d="M117.979,28.017h-112c-5.3,0-8,6.4-4.2,10.2l56,56c2.3,2.3,6.1,2.3,8.401,0l56-56   C125.979,34.417,123.279,28.017,117.979,28.017z" />
        </g>
    </svg></span>
                                                    <span class="r-opacity-07">
                            <span>

                            </span>
                        </span>
                                                </p>
                                            </div>
                                            <div class="r-caps r-caps--nano r-fw-bold r-gutter--half r-border-top r-tx-c r-co-secondary">
                                                View More
                                            </div>
                                        </a>
                                    </li></ul></div>
                        </div>
                    </section><section class="r-section r-section--padded">
                        <div class="r-content-area">
                            <div class="r-section-title">
                                <h2 class="r-section-title_title">
                                    Recent Reports
                                </h2>
                                <a href="{{url('/admin/user/reports')}}" class="r-d-flex r-al-i-c r-fw-bold r-decoration-none r-read-more r-icon-move-on-hover">
                                    <span class=" r-prefix">View all</span><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round" class="icon icon-arrow-right">
                                        <line x1="5" y1="12" x2="19" y2="12" />
                                        <polyline points="12 5 19 12 12 19" />
                                    </svg></a>
                            </div>
                            <table class="responsive-table striped"><thead>
                                <tr><th>
                                        Status
                                    </th>
                                    <th>
                                        Crime Type
                                    </th>
                                    <th>
                                        Description
                                    </th><th>
                                        Reported By
                                    </th><th>
                                        Date Reported
                                    </th>
                                    <th>
                                        Approved
                                    </th>
                                    <th>
                                        View More
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($reports) && count($reports) >0)

                                    @foreach($reports as $report)
                                        @php
                                            switch ($report->status){
                                            case "pending":
                                            $res = "danger";
                                            $status = "Approve";
                                            break;
                                            default:
                                            $res = "success";
                                            $status ="Done";
                                            }
                                        @endphp
                                        <tr>
                                            <a href="{{url('/admin/report/view/'.$report->id)}}" class="r-none">
                                                <td class="r-co-{{$res}}">
                                                    <a class="r-none" href="{{url('/admin/report/view/'.$report->id)}}">
                                                        {{ ucfirst($report->status)}}
                                                    </a>
                                                </td>
                                                <td>
                                                    <a class="r-none" href="{{url('/admin/report/view/'.$report->id)}}">
                                                        {{$report->crimetype->name ?? "No Crime Type"}}
                                                    </a>
                                                </td>
                                                <td class="">
                                                    <a class="r-none" href="{{url('/admin/report/view/'.$report->id)}}">
                                                        {{$report->description}}
                                                    </a>
                                                </td>
                                                <td class="">
                                                    <a class="r-none" href="{{url('/admin/report/view/'.$report->id)}}">
                                                        {{$report->user->first_name.' '.$report->user->last_name}}
                                                    </a>
                                                </td>
                                                <td class="">
                                                    <a class="r-none" href="{{url('/admin/report/view/'.$report->id)}}">
                                                        {{$report->created_at}}
                                                    </a>
                                                </td>
                                                <td class="r-co-{{$res}}">
                                                    @if($status === 'Done')
                                                        <button  class="r-d-flex r-al-i-c r-btn r-btn--success r-width-100">
                                                            {{$status}}
                                                        </button>
                                                    @else
                                                        <a href="{{url('/admin/report/approve/'.$report->id)}}" class="r-d-flex r-al-i-c r-btn r-btn--action">
                                                            {{$status}}
                                                        </a>
                                                    @endif
                                                </td>

                                                <td class="">
                                                    <a class="r-none" href="{{url('/admin/report/view/'.$report->id)}}">
                                                        View more
                                                    </a>
                                                </td>
                                            </a>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr >
                                        <td colspan="7" class="text-xl-center">No Report</td> </tr>
                                @endif

                                </tbody>
                            </table>
                        </div>
                    </section>
@endsection
