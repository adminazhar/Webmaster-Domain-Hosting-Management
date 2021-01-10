<h1>Domain List</h1>
<a href="create">Add Domain</a><br>
@forelse($domains as $domain)
    Domain Name:  {{$domain->companyname}}
    <br>
    Domain URL: {{$domain->url}} - <a href="{{$domain->id}}/edit">EDIT</a>
    <hr>
@empty
    "No Domain Found."
@endforelse
