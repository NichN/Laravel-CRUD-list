<style>
  .table-list {
    display: flex;
    justify-content: center;               
    margin: 0;
}
form {
    height: auto;          
    min-width: 300px;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 30px;    
    border-radius: 10px;     
    margin-top: 20px;  
    background-color: #E3E3B4;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
}
h1{
    text-align: center;
    background-color: #97EA8E;
}
a{
    text-align: center;
}
input{
    border-radius: 5px;
    height: 35px;
    margin-left: 5px;
    text-align: center;
}
.button{
    display: flex;
    justify-content: space-between;
}
button:hover{
    background-color: #97EA8E;
}
button{
    background-color: #285E8C;
    color: #ffff;
    border-radius: 5px;
}
p{
    margin-left: 20px;
}
</style>
<body>
<div class=table>
<h1>Update Food</h1>
<form action="{{ route('food.update',$foodList->Food_ID)}}" method="POST">
    @csrf
    @method('PATCH')
    <p>
        Food Name: <input type="text" name="Food_Name" value="{{ $foodList->Food_Name}}" placeholder="Enter food name">
    </p>
    <p>
        Description: <input type="text" name="Food_title" value="{{ $foodList->Food_title }}" placeholder="Enter description">
    </p>
    <p>
        Food Quantity: <input type="text" name="qty_Food" value="{{ $foodList->qty_Food }}" placeholder="Enter quantity of food">
    </p>
    <p>
        Food Price: <input type="text" name="Food_Price" value="{{ $foodList->Food_Price }}" placeholder="Enter price">
    </p>
    <a href="{{ route('food.index') }}">Back</a>
    <button type="submit">Update</button>
</form>
</div>
</body>