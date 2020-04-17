<h1>Subjects</h1>
<h5>No of Subjects {{$subjects->count()}}</h5>
<table border="1">

    @foreach($subjects as $subject)
        <tr>
            <td><a href="{{route('subjects.show',$subject->id)}}">{{$subject->subject_name}}<a></td>
            <td>No of Students ::{{$subject->students->count()}}</td>
        </tr>
    @endforeach

</table>