@extends('admin.layouts.maindashboard')

@section('content')

    <section class="r-section r-section--padded">
        <div class="element-header">
            @if (session('message'))
                <div class="alert alert-info r-blue" style="margin: 30px">
                    {{ session('message') }}
                </div>
            @endif
        </div>


        <div class="r-content-area">
            <div class="r-section-title">
                <h2 class="r-section-title_title">
                    Report List
                </h2>
            </div><table class="responsive-table striped"><thead>
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
                        {{$report->status}}
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
                        <button  class="r-d-flex r-al-i-c r-btn r-btn--primary">
                            {{$status}}
                        </button>
                        @else
                            <a href="{{url('/admin/report/approve/'.$report->id)}}" class="r-d-flex r-al-i-c r-btn r-btn--secondary">
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
            @if($reports instanceof \Illuminate\Pagination\LengthAwarePaginator )

                {{$reports->appends(request()->except('page'))->links()}}

            @endif
        </div>
    </section>
@endsection
