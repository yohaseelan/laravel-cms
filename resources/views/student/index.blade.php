<!-- {{$students}} -->
<ol>
@foreach($students as $stu)
    
        <li>{{$stu->first_name}}::{{$stu->last_name}} ::{{$stu->grade->name}}</li>
       
   
@endforeach
</ol>

 <table border='1'> 
@foreach($students as $student)
    <tr>
        <td>{{$student->first_name}}</td>
         <td>{{$student->last_name}}</td>
      
         
         <td><a href="{{route('grades.show',$student->grade_id)}}">{{$student->grade->name}}</a></td>
       <td><a href="{{route('students.show',$student->id)}}">
       Subject::({{$student->subjects->count()}})</a></td>
        <td>
            <ol>
                @foreach($student->subjects as $subject)
                
                    <li>{{$subject->subject_name}}</li>
    
                @endforeach
            
            </ol>
        
        
        </td>
        
    </tr>


@endforeach

</table> 