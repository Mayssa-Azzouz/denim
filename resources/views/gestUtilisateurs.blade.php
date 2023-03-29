<!doctype html>
<head>

</head>
<body>

<div style="padding: 100px">
            <table class="table table-success table-striped " style="width:900px;">

                <thead align=center>
                   <th >Name</th>
                   <th >Email</th>
                   
                    <th>Created_at</th>
               <th >Action</th>
               </thead>

                @foreach ($data as $data)
                <tr align=center >
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->password}}</td>
                <td>{{$data->created_at}}</td>

               
                <td><a href="{{url('/deleteuser',$data->id)}}">Supprimer</a>
                <a href="{{url('/updateUser',$data->id)}}">Modifier</a>
            </td>  
            
                </tr>     
                @endforeach
            </table>
        </div>

     

</body>
</html>
