<style>
    body {
        font-family: Arial, sans-serif; 
        background-color: #f4f4f4;    
        margin: 0;
        padding: 0;
    }
    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 100vh;            
        padding: 20px;
    }
    .details {
        background-color: #EBEBD5;      
        border-radius: 8px;         
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
        padding: 20px;
        max-width: 600px;          
        width: 100%;
        text-align: center;
        
    }
    h1 {
        margin-bottom: 20px;
        color: white;      
        background-color: #97EA8E;
        }
    h3 {
        margin: 10px 0;              
        color: #555;                 
    }
    a {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #007bff;   
        color: #fff;                 
        text-decoration: none;      
        border-radius: 4px;          
        font-weight: bold;
    }
    a:hover {
        background-color: #0056b3;   
    }
</style>

<body>
    <div class="container">
        <div class="details">
            <h1>Food Detail</h1>
            <h3>Food ID: {{$fooddetail->Food_ID}}</h3>
            <h3>Food Name: {{$fooddetail->Food_Name}}</h3>
            <h3>Description: {{$fooddetail->Food_title}}</h3>
            <h3>Food Quantity: {{$fooddetail->qty_Food}}</h3>
            <h3>Price: {{$fooddetail->Food_Price}}</h3>
            <a href="{{ route('food.index')}}">Back</a>
        </div>
    </div>
</body>
