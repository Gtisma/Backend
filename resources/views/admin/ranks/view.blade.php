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
                    Rank List
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

                @if(isset($ranks) && count($ranks) >0)

                    @foreach($ranks as $rank)

                        <tr>
                            <td>
                                {{$rank->name}}
                            </td>
                            <td class="">
                                {{$rank->created_at}}
                            </td>



                        </tr>
                    @endforeach
                @else
                    <tr >
                        <td colspan="2" class="r-tx-l"> No Security Outfit Added</td> </tr>
                @endif

                </tbody>
            </table>
            @if($ranks instanceof \Illuminate\Pagination\LengthAwarePaginator )

                {{$ranks->appends(request()->except('page'))->links()}}

            @endif
        </div>
    </section>
@endsection
