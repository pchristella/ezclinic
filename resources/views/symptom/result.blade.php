<div class="container">
    @if(isset($s))
{{--         <p> The Search results for your query <b> {{ $query }} </b> are :</p>
 --}}    <h2>Sample User details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Disease</th>
                <th>Symptom</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach($symptoms as $s)
            <tr>
                <td>{{$s->disease}}</td>
                <td>{{$s->symptom}}</td>
                <td>{{$s->type}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
