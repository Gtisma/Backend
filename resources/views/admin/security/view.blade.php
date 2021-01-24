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
                    Security Outfit List
                </h2>
            </div><table class="responsive-table striped"><thead>
                <tr><th>
                        Name
                    </th>
                    <th>
                        Date Created
                    </th>

                </tr>
                </thead>
                <tbody>

                @if(isset($securities) && count($securities) >0)

                    @foreach($securities as $security)

                        <tr>
                            <a href="{{url('/admin/rank/'.$security->id)}}">
                            <td>
                                <a href="{{url('/admin/rank/'.$security->id)}}">
                                {{$security->name}}
                                </a>
                            </td>
                            <td class="">
                                {{$security->created_at}}
                            </td>
                            </a>


                        </tr>
                    @endforeach
                @else
                    <tr >
                        <td colspan="2" class="r-tx-l"> No Security Outfit Added</td> </tr>
                @endif

                </tbody>
            </table>
            @if($securities instanceof \Illuminate\Pagination\LengthAwarePaginator )

                {{$securities->appends(request()->except('page'))->links()}}

            @endif
        </div>
    </section>
@endsection
