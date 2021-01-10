<h1>Domain Update</h1>


<form action="/domain/{{$domain->id}}" method="post">
    @method('PUT')
    @csrf

    Domain URL: <input type="text" name="url" value="{{$domain->url}}"><br>
    Domain Company Name: <input type="text" name="companyname" value="{{$domain->companyname}}"><br>
    <button type="submit">Add</button>
</form>
