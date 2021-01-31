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
                        <a class="r-none" href="{{url('/admin/user/profile/'.$user->id)}}">
                        {{$user->first_name}}
                        </a>
                    </td>
                    <td>
                        <a class="r-none" href="{{url('/admin/user/profile/'.$user->id)}}">
                        {{$user->last_name}}
                        </a>
                    </td>
                    <td class="">
                        <a class="r-none" href="{{url('/admin/user/profile/'.$user->id)}}">
                        {{$user->email}}
                        </a>
                    </td>
                    <td class="">
                        <a class="r-none" href="{{url('/admin/user/profile/'.$user->id)}}">
                        {{$user->phone}}
                        </a>
                    </td>
                    <td class="">
                        <a class="r-none" href="{{url('/admin/user/profile/'.$user->id)}}">
                        {{$user->gender->name?? ""}}
                        </a>
                    </td>
                    <td class="">
                        <a class="r-none" href="{{url('/admin/user/profile/'.$user->id)}}">
                        {{$user->source}}
                        </a>
                    </td>
                    <td class="">
                        <a class="r-none" href="{{url('/admin/user/profile/'.$user->id)}}">
                        {{$user->created_at}}
                        </a>
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
