@foreach($teachers as $teacher)
    {{$teacher->pic()->getResults()}}
    @endforeach