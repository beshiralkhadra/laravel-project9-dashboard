@extends('admin.layout.master')
@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">


        <div class="row">
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    <h3 class="title-5 m-b-35">trips Table</h3>
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <div class="rs-select2--light rs-select2--md">
                            </div>
                            <div class="rs-select2--light rs-select2--sm">
                            </div>
                        </div>
                        <div class="table-data__tool-right">
                        <a href="{{route('trip.create')}}"  style="float: right;"class="au-btn au-btn-icon au-btn--green au-btn--small">Add Trip</a>
                        </div>
                    </div>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                    
                                    <th> Id</th>
                                    <th>Trip Name</th>
                                    <th>Driver Name</th>
                                    <th>Trip</th>
                                    <th>Date</th>
                                    <th>Capacity</th>
                                    <th>Price</th>
                                    <th>Car model</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($trips as $trip)
                                <tr class="tr-shadow">
                                    <td>{{$trip->id}}</td>

                                    <td>
                                     <span>{{ $trip->name}}</span>
                                    </td>


                                    <td class="desc">{{ $trip->driver_name}}</td>
                                    <td class="desc">{{ $trip->from}}  to  {{$trip->to}} </td>

                                    <td class="desc">{{ $trip->Date}}</td>
                                    <td class="desc">{{ $trip->capacity}}</td>
                                    <td class="desc">{{ $trip->price}}</td>
                                    <td class="desc">{{ $trip->car_model}}</td>


                        <td>
                            <div class="table-data-feature">
                                <form action="{{route("trip.destroy",$trip->id)}}" method="POST">
                                    @csrf
                                    @method("delete")
                                    <button type="submit" class="item mr-2" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                                </form>
                                <a href="{{route("trip.edit",$trip->id)}}">
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