<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Announcements</title>
    </head>
    <body>
    <h2 class="text-center">Pay Roll System</h2>
        <div class = "container">
            <form method="post" action="giveSalary">
                @csrf
                    <input type="text" name="announcement">
                <button type="submit"  value ="uploadAnnouncement">Announce</button>
            </form>
        </div>
        <h2 class="text-center">
            <?php
            echo "Today " . date("Y/m/d") ;
        ?>
        </h2>
        
        <div class="container">      
            <table>
            <thead>
                <tr>
                    <th>Announcements</th>
                </tr>
            </thead>
                <tbody>
                @foreach ($ann as $ann)
                    <tr>
                        <td>{{ $ann->announce }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        
        <style>
            form {  
                align: center;
                max-width: 280px;
                margin: auto;
                padding: 0;    
            }
            input[type=text]{
                text-align: center;
                width: 358px;
                height: 100px;
                padding: 5px;
	        }
            button {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 10px 148px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 10px 2px;
                cursor: pointer;
            }
            body{
                background-color: #f2f2f2;
            }
            h2{
                text-align: center;
            }
            .container{
                display: flex;
                justify-content: center;
            }
            table{
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 80%;
            }

            td{
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }
            th{
                border: 1px solid #dddddd;
                text-align: center;
                padding: 8px;
            }
        </style>
    </body>
</html>