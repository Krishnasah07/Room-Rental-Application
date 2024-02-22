@extends('backend.dashboard.landlord.layouts.master')
@section('title','Room Reservation Update')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<style>
        .product-container {
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 10px;
            transition: 0.6s;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .hv:hover{
            transition: 0.6s;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .product-images {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .product-image {
            flex: 1;
            margin: 5px;
        }

        .product-image img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        @media (max-width: 768px) {
            .product-images {
                flex-direction: column;
            }

            .product-image {
                flex: 100%;
            }
        }
    .bg{
        background: linear-gradient( 60deg, rgba(84, 58, 183, 1) 0%, rgba(0, 172, 193, 1) 100% );
    }
  </style>
</head>
<body>
    

<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Room Reservation Update</h4>
            @forelse($reserve_details_updates as $update)
                        <div class="product-container hv">
                            <h4>Room Images</h4>
                                <div class="product-images">
                                    <div class="product-image">
                                        <img src="{{ asset('Room_Images').'/'.$update->productinfo->image ?? '' }}" alt="Product Image 1">
                                    </div><br>
                                    <div class="product-image">
                                        <img src="{{ asset('Room_Images').'/'.$update->productinfo->image2 ?? '' }}" alt="Product Image 2">
                                    </div>
                                    <div class="product-image">
                                        <img src="{{ asset('Room_Images').'/'.$update->productinfo->image3 ?? '' }}" alt="Product Image 3">
                                    </div>
                                </div>
                        </div>
     
                <h4 style="color:white;">Room Details</h4>
                <div class="table-responsive">
                <table class="table table-bordered">
                         <thead>
                          <tr>
                            <th> Room ID</th>
                            <th> Category ID </th>
                            <th> Rooms </th>
                            <th> Kitchen </th>
                            <th> Bathroom </th>
                            <th> Contact No. </th>
                            <th> Location </th>
                            <th> Price </th>
                          </tr>
                        </thead>
                        <tbody>
                            <td>{{ $update->productinfo->id }}</td>
                            <td>{{ $update->productinfo->category_id }}</td>                                           
                            <td>{{ $update->productinfo->room }}</td>
                            <td>{{ $update->productinfo->kitchen }}</td>
                            <td>{{ $update->productinfo->bathroom }}</td>
                            <td>{{ $update->productinfo->phone }}</td>
                            <td>{{ $update->productinfo->location }}</td>
                            <td>{{ $update->productinfo->price }}</td>
                        </tbody>
                      </table>
                    </div>
                
                <br/><br/>
                <h4 style="color:white;">Reservation with Renter Details</h4>
                <div class="table-responsive">
                <table class="table table-bordered">
                         <thead>
                          <tr>
                            <th> Renter Name</th>
                            <th> Contact No. </th>
                            <th> Image </th>
                            <th> Image </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                            
                            <td>{{ $update->renterinfo->name }}</td>
                            <td>{{ $update->renterinfo->mobile }}</td>                                           
                            <td>{{ $update->renterinfo->image }}</td>
                            <td>{{ $update->renterinfo->image }}</td>
                            <td>
                                <a href="{{ route('Room.Reservation.Approval' ,$update->id) }}">
                                    <button type="button" class="btn btn-success btn-md">Approve</button>
                                </a> &nbsp
                                <a href="{{ route('Room.Reservation.Reject',$update->id) }}">
                                    <button type="button" class="btn btn-danger btn-md">Reject</button>
                                </a>
                            </td>
                        </tbody>
                      </table>
                    </div>
 
 @empty
 @endforelse
                        
</body>
</html>

@endsection
