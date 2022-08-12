<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add job Circular</title>
    </head>
    <body>
    <h2 class="text-center">Pay Roll System</h2>
        <form method="post" action="giveSalary">
            @csrf
            <label>Add job Circular:</label>
                <input type="file" name="ID" required>
            <button type="submit"  value ="Add Employee">Submit</button>
        </form>

        <style>
            h2{
                text-align:center;
            }
            form {  
                align: center;
                max-width: 280px;
                margin: auto;
                padding: 0;    
            }
            input[type=number]{
                text-align: center;
                width: 300px;
                padding: 5px;
	        }
            input[type=file]{
                text-align: center;
                width: 300px;
                padding: 5px;
	        }
            select{
                text-align: center;
                width: 314px;
                padding: 5px;
            }
            button {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 10px 131px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 10px 2px;
                cursor: pointer;
            }
        </style>
    </body>
</html>