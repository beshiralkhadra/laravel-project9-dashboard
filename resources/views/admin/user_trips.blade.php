@extends('admin.layout.master')
@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">


        <div class="row">
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    <h3 class="title-5 m-b-35">Users Trips Table</h3>
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <div class="rs-select2--light rs-select2--md">
                            </div>
                            <div class="rs-select2--light rs-select2--sm">
                            </div>
                        </div>
            
                    </div>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                    
                                    <th>passenger name </th>
                                    <th>Trip name</th>
                                    <th>Status</th>
                              
                                    

                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($userTrips as $userTrip)
                                <tr class="tr-shadow">
                                    <td>{{$userTrip->Trip}}</td>

                                    <td>
                                     <span>{{ $userTrip->user_id}}</span>
                                    </td>


                                    <td class="size">{{ $userTrip->trip_id}}</td>
                            
                             


                        <td>
                            <div class="table-data-feature">
                                <form action="{{route("userTrip.destroy",$userTrip->id)}}" method="POST">
                                    @csrf
                                    @method("delete")
                                    <button type="submit" class="item mr-2" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                                </form>
                                <a href="{{route("userTrip.edit",$userTrip->id)}}">
                                <button class="item mr-2" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                                </a>
                            </div>
                        </td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE -->
                </div>
            </div>
</div>
</div>
</div>


@endsection 