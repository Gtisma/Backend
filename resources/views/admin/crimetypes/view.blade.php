@extends('admin.layouts.maindashboard')

@section('content')
    <section class="r-section r-section--padded-">
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
                    CrimeType List
                </h2>
            </div><table class="responsive-table striped"><thead>
                <tr><th>
                        Name
                    </th>
                    <th>
                       Date Created
                    </th>
                    <th>
                        Delete
                    </th>

                </tr>
                </thead>
                <tbody>

                @if(isset($crimetypes) && count($crimetypes) >0)

                    @foreach($crimetypes as $crimetype)

                <tr>
                    <a class="r-none" href="{{url('/admin/report/crimetype/'.$crimetype->id)}}">
                    <td>
                        <a class="r-none" href="{{url('/admin/report/crimetype/'.$crimetype->id)}}">
                        {{$crimetype->name}}
                        </a>
                    </td>
                    <td class="">
                        <a class="r-none" href="{{url('/admin/report/crimetype/'.$crimetype->id)}}">
                        {{$crimetype->created_at}}
                        </a>
                    </td>
                        <td>
                            <a href="{{url('/admin/crimetype/del/'.$crimetype->id)}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2364AA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                            </a>
                        </td>

                    </a>

                </tr>
                    @endforeach
                @else
                    <tr >
                        <td colspan="3" class="r-tx-l"> No crimeType</td> </tr>
                    @endif

                </tbody>
            </table>
            @if($crimetypes instanceof \Illuminate\Pagination\LengthAwarePaginator )

                {{$crimetypes->appends(request()->except('page'))->links()}}

            @endif
        </div>
    </section>
@endsection
