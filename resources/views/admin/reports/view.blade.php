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
                    <td class="r-co-{{$res}}">
                        {{$report->status}}
                    </td>
                    <td>
                        {{$report->crimetype->name ?? "No Crime Type"}}
                    </td>
                    <td class="">
                        {{$report->description}}
                    </td>
                    <td class="">
                        {{$report->user->first_name.' '.$report->user->last_name}}
                    </td>
                    <td class="">
                        {{$report->created_at}}
                    </td>
                    <td class="r-co-{{$res}}">
                        <button  class="r-btn r-btn--primary">
                            {{$status}}
                        </button>
                    </td>

                    <td class="">
                      View more
                    </td>
                </tr>
                    @endforeach
                @else
                    <tr colspan="7"> NO Report </tr>
                    @endif

                </tbody>
            </table>
            @if($reports instanceof \Illuminate\Pagination\LengthAwarePaginator )

                {{$reports->appends(request()->except('page'))->links()}}

            @endif
        </div>
    </section>
@endsection
