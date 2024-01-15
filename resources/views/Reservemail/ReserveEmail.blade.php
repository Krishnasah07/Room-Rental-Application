Dear {{ auth()->user->name}}
<p> Thank you so much for Room reservation at Roomie </p>
<h2> Here is your Room Details </h2>
<div class="product-description">
            <h2>{{ $product->location}} </h2>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No. of Room</th>
                            <td> {{ $product->room }} </td>                        
                          </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th >No. of Kitchen</th>
                            <td> {{ $product->kitchen }} </td>                        
                          </tr>
                          <tr>
                            <th> No. of Washroom </th>
                            <td> {{ $product->bathroom }} </td>                        
                          </tr>
                          <tr>
                            <th >No. of Location</th>
                            <td> {{ $product->location }} </td>                        
                          </tr>
                          <tr>
                            <th>  Contact Number </th>
                            <td> <u>{{ $product->phone }}</u> </td>                        
                          <tr>
                            <td colspan="2">
                              <p>
                              {{ $product->Description }}
                              </p>
                            </td>
                          </tr>                         
                        </tbody>
                      </table>
                    </div>
          </div> <br/>
       