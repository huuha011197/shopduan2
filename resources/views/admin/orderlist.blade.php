@extends('admin.home')
@section('content')
      <!-- End Navbar -->
  <div class="content">
    <div class="container-fluid">
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title tb" >All orders</h4>
                </div>
                @if (\Session::has('success'))
                <h5 class="alert alert-danger">{!! \Session::get('success') !!}</h5>
                @endif
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <tr><th>
                          ID
                        </th>
                        <th>
                          customer id
                        </th>
                        <th>
                          Date order
                        </th>
                        <th>
                          Total
                        </th>
                        <th>
                          Pament
                        </th>
                        <th>
                          Note
                        </th>
                        <th>
                          Created at
                        </th>
                      </tr></thead>
                      <tbody>
                        @foreach($orders as $us)
                        <tr>
                          <td> <a href="{{route('bill',$us->id)}}" >
                            {{$us->id}}
                          </td>
                          <td>
                            <a href="{{route('customer',$us->id_customer)}}" > {{$us->id_customer}}</a>
                          </td>
                          <td>
                            {{$us->date_order}}
                          </td>
                          <td>
                            {{$us->total}}
                          </td>
                          <td>
                            {{$us->payment}}
                          </td>
                           <td>
                            {{$us->note}}
                          </td>
                          <td>
                            {{$us->created_at}}
                          </td>
                          <td>
                            <td>
                              <a href="{{route('status',$us->id)}}" class="btn btn-xs <?php echo $us->status == 0 ?'btn-danger' : 'btn-primary' ?>" ><?php echo $us->status == 0 ? 'no process': 'processed'?>
                              </a>                               
                              <a class="btn btn-danger" href="{{route('xoaorder',$us->id)}}">Delete 
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
</div>
@if(\Session::has('customer'))
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog  modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
      <div class="modal-body">
                  <table class="table">
                      <thead class=" text-primary">
                        <tr><th>
                          ID
                        </th>
                        <th>
                         Name
                        </th>
                        <th>
                          Gender
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Address
                        </th>
                        <th>
                          Phone
                        </th>
                      </tr></thead>
                      <tbody>
                        <tr>
                          <td> <a href="{{route('bill',$us->id)}}" >
                            {{ Session::get('customer')->id }}
                          </td>
                          <td>
                            {{ Session::get('customer')->name }} </a>
                          </td>
                          <td>
                            {{ Session::get('customer')->gender }}
                          </td>
                          <td>
                           {{ Session::get('customer')->email }}
                          </td>
                          <td>
                           {{ Session::get('customer')->id }}
                          </td>
                          <td>
                           {{ Session::get('customer')->phone_number }}
                          </td>
                        </tr>
                      </tbody>
                    </table>
            </div>
              <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
<script type="text/javascript">
    $(window).load(function(){        
   $('#myModal').modal('show');
    }); 
</script>
@endif
@if(\Session::has('bill'))
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog  modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
      <div class="modal-body">
                  <table class="table">
                      <thead class=" text-primary">
                        <tr><th>
                          ID
                        </th>
                        <th>
                         Id product
                        </th>
                        <th>
                         Product name
                        </th>
                        <th>
                          Quantity
                        </th>
                        <th>
                          Unitprice
                        </th>
                      </tr></thead>
                      <tbody>
                        <tr>
                          @foreach(Session::get('bill') as $bill)
                          <td> <a href="{{route('bill',$us->id)}}" >
                            {{ $bill->id }}
                          </td>
                          <td>
                            {{ $bill->id_product }}
                          </td>
                          <td>
                           {{ $bill->product_name }}
                          </td>
                          <td>
                           {{ $bill->quantity }}
                          </td>
                          <td>
                           {{ $bill->unit_price }}
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
            </div>
              <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
<script type="text/javascript">
    $(window).load(function(){        
   $('#myModal').modal('show');
    }); 
</script>
@endif
@endsection