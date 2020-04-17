<h1>{{$grade->name}}</h1>
<h5>No Of Students({{$grade->students->count()}})</h5>
<table border="1"> 
    @foreach($grade->students as $stu)
        <tr>
            <td><a href="{{route('students.show',$stu->id)}}">{{$stu->first_name}}<a></td>
            <td>{{$stu->last_name}}</td>

        </tr>
    
    @endforeach
</table>
<a href="{{route('grades.index')}}">All Gardes</a>