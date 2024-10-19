<style>
    body {
        font-family: Arial, sans-serif; 
        background-color: #333;     
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
    .form-container {
        background-color: #97EA8E;      
        border-radius: 8px;          
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
        padding: 20px;
        max-width: 600px;       
        width: 100%;
        text-align: center;
    }
    h3 {
        margin-bottom: 20px;
        color: #333;  
        background-color: #97EA8E;               
    }
    p {
        margin: 10px 0;              
    }
    input[type="text"] {
        width: calc(100% - 20px);   
        padding: 10px;
        border: 1px solid #ccc;      
        border-radius: 10px;          
        box-sizing: border-box;      
    }
    button {
        padding: 10px 20px;
        background-color: #007bff;  
        color: #fff;                 
        border: none;
        border-radius: 4px;          
        font-size: 16px;
        cursor: pointer;             
    }
    button:hover {
        background-color: #0056b3;   
    }
    a {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #6c757d;  
        color: #fff;                 
        text-decoration: none;       
        border-radius: 4px;          
        font-weight: bold;
    }
    a:hover {
        background-color: #5a6268;   
    }
</style>

<body>
    <div class="container">
        <div class="form-container">
            <h3>Add New Food</h3>
            <form action="{{ route('food.store')}}" method="post">
                @csrf
                @method('POST')
                <p>
                    Food Name: <input type="text" id="Food_Name" name="Food_Name" placeholder="Enter food name">
                </p>
                <p>
                    Description: <input type="text" id="Food_title" name="Food_title" placeholder="Enter description">
                </p>
                <p>
                    Food Quantity: <input type="text" id="qty_Food" name="qty_Food" placeholder="Enter quantity of food">
                </p>
                <p>
                    Food Price: <input type="text" id="Food_Price" name="Food_Price" placeholder="Enter price">
                </p>
                <button type="submit">Insert</button>
            </form>
            <a href="{{ route('food.index')}}">Back</a>
        </div>
    </div>
</body>
