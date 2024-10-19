<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
  table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 5px;
}

th {
    background-color: #97EA8E;
}

button {
    background-color: red;
    color: white;
    height: 30px;
    text-align: center;
    cursor: pointer;
    border-radius: 5px;
}

a {
    color: white;
    text-decoration: none;
    border-radius: 5px;
    display: inline-block;
    color: white;
    padding: 10px 20px;
    text-align: center;
    border-radius: 5px;
    text-decoration: none;
    cursor: pointer;
}
a:hover {
    color: red;
}

h1 {
    text-align: center;
    color: blue;
    margin-top: 50px;
    transform: translateY(50px);
}
table {
    width: 80%; 
    margin: 0 auto; 
    text-align: center;
}
.method_list {
    background-color: green;
    text-align: center;
   cursor: pointer;
   
}
</style>
<body>
<h1>FOOD LIST</h1>
<a href="{{ route('food.create') }} " class="method_list">Add New</a>
<br><br>
<table style="background-color: white;">
    <thead>
        <tr>
            <th>FOOD ID</th>
            <th>FOOD NAME</th>
            <th>DESCRIPTION</th> 
            <th>FOOD QUANTITY</th>
            <th>FOOD PRICE</th>
            <th>ACTIONS</th> 
        </tr>
    </thead>
    <tbody>
        @foreach($foodList as $f)
            <tr>
                <td>{{ $f->Food_ID }}</td>
                <td>{{ $f->Food_Name }}</td>
                <td>{{ $f->Food_title }}</td> 
                <td>{{ $f->qty_Food }}</td>
                <td>{{ $f->Food_Price }}$</td>
                <td>
        <form action="{{ route('food.destroy', $f->Food_ID) }}" method="post" style="display: inline;">
        @csrf
        @method('DELETE')
                <a href="{{ route('food.show', $f->Food_ID) }}" title="View">
                    <i class="fa-solid fa-eye" style="color: orange;"></i>
                </a> | 
                <a href="{{ route('food.edit', $f->Food_ID) }}" title="Edit">
                    <i class="fa-solid fa-pen" style="color: orange;"></i>
                </a> | 
                <button type="submit" title="Delete" style="background: none; border: none; cursor: pointer; color: red;">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </form>
     </td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
