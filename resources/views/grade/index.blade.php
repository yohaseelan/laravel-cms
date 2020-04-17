<table border="1">
    @foreach($grades as $grade)
          <tr>  
            <td>{{$grade->name}}</td>
            <td><a href="{{route('grades.show',$grade->id)}}">Students</a></td>
            <td>
                   <ul>
                    @foreach($grade->students as $student)
                        
                        <li>
                        {{$student->first_name}}::{{$student->last_name}}
                        </li>   
                            

                        @endforeach
                   </ul>
                 
                   
         </td>

          </tr>  

    @endforeach

</table>