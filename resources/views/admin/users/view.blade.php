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
                    {{ucfirst($type)??""}} List
                </h2>
            </div><table class="responsive-table striped"><thead>
                <tr><th>
                        FirstName
                    </th>
                    <th>
                        LastName
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Phone
                    </th>
                    <th>
                        Gender
                    </th>
                    <th>
                       Registered with
                    </th>
                    <th>
                       Date Registered
                    </th>

                </tr>
                </thead>
                <tbody>

                @if(isset($users) && count($users) >0)

                    @foreach($users as $user)

                <tr>
                    <td>
                        {{$user->first_name}}
                    </td>
                    <td>
                        {{$user->last_name}}
                    </td>
                    <td class="">
                        {{$user->email}}
                    </td>
                    <td class="">
                        {{$user->phone}}
                    </td>
                    <td class="">
                        {{$user->gender->name?? ""}}
                    </td>
                    <td class="">
                        {{$user->source}}
                    </td>
                    <td class="">
                        {{$user->created_at}}
                    </td>



                </tr>
                    @endforeach
                @else
                    <tr >
                        <td colspan="7" class="r-tx-l">No User</td> </tr>
                    @endif

                </tbody>
            </table>
            @if($users instanceof \Illuminate\Pagination\LengthAwarePaginator )

                {{$users->appends(request()->except('page'))->links()}}

            @endif
        </div>
    </section>
@endsection
