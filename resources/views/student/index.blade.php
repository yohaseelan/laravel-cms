<!-- {{$students}} -->
<table border='1'> 
@foreach($students as $student)
    <tr>
        <td>{{$student->first_name}}</td>
         <td>{{$student->last_name}}</td>
         
         <td>{{$student->grade->name}}</td>
        
    </tr>


@endforeach

</table>