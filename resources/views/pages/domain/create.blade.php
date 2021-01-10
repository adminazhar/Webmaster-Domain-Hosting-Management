<h1>Domain Add</h1>


<form action="/domain" method="post">
@csrf
    Domain URL: <input type="text" name="url"><br>
    Domain Company Name: <input type="text" name="companyname"><br>
    <button type="submit">Add</button>
</form>
