<!-- {{$grades}} -->


<table border="1">
    @foreach($grades as $grade)
          <tr>  
            <td>{{$grade->name}}</td>

            <td>
                   <ul>
                   @foreach($grade->students as $student)
                       
                       <li>
                       {{$student->first_name}}
                       </li>   
                        

                    @endforeach
                   </ul>
                 
                   
         </td>

          </tr>  

    @endforeach

</table>