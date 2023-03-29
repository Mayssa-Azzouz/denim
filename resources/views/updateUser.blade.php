<!doctype html>
<head>

</head>
<body>



<div style="margin-left:300px;margin-top:100px;">
       <form action="{{url('/updateuser',$data->id)}}" method="post"  enctype="multipart/form-data">
         @csrf
    
           <input class="form-control" style="color:black;" type="text" name="name" value="{{$data->name}}" required>
           <input class="form-control" style="color:black;" type="text" name="email" value="{{$data->email}}" required>


        
         
        <div>
          <input class="btn btn-primary " type="submit" style="width:300px;height:40px" value="Save">
        </div>

       </form>
      </div>
     
      </body>
      </html>