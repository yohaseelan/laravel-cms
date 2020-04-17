<table width="100%">
    <tr>
        <td>First Name</td>
        <td>{{$student->first_name}}</td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td>{{$student->last_name}}</td>
    </tr>
    <tr>
        <td>Grade Name</td>
        <td><a href="{{route('grades.show',$student->grade->id)}}">{{$student->grade->name}}</a>::{{$student->grade->students->count()}}</td>
    </tr>
</table>
<hr>

<table width="100%">
<caption>No of Subject ::{{$student->subjects->count()}}</caption>
@foreach($student->subjects as $subject)
        <tr>
        <td>{{$subject->id}}</td>
            <td><a href="{{route('subjects.show',$subject->id)}}">{{$subject->subject_name}}<a></td>
        </tr>
@endforeach

</table>
<hr>
<a href="{{route('students.index')}}">All Students</a>