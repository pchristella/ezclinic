<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample User details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Disease</th>
                <th>Symptom</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $symptom)
            <tr>
                <td>{{$symptom->disease}}</td>
                <td>{{$symptom->symptom}}</td>
                <td>{{$symptom->type}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
