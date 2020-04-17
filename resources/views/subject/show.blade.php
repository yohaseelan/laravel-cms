<h1>{{$subject->subject_name}}</h1>

<h5>No of Students :: {{$subject->students->count()}}</h5>
<table>
    @foreach($subject->students as $student)
        <tr>
            <td><a href="{{route('students.show',$student->id)}}">{{$student->first_name}}({{$student->subjects->count()}})<a></td>
            <td>{{$student->last_name}}</td>
            <td>{{$student->grade->name}} ({{$student->grade->students->count()}})</td>

        </tr>
    @endforeach
</table>
<a href="{{route('subjects.index')}}">All Subjects</a>