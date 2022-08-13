<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Announcements</title>
    </head>
    <body>
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