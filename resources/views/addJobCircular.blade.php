<!DOCTYPE html>
<html>
    <head>
        <title>Add Job Circular</title>
    </head>

    <body>
        <div class="container">
            <h2>Add Job Circular</h2>
            <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label class="form-label" for="inputFile">PDF/CSV Files:</label>
                <input type="file" name="file">
                <div>
                    <button type="submit">Upload</button>
                </div>
            </form>
            <style>
                body{
                    background-color: #f2f2f2;
                }
                h2, h3{
                    text-align: center;
                }
                form {  
                    align: center;
                    max-width: 280px;
                    margin: auto;
                    padding: 0;    
                }
                input[type=file]{
                    text-align: center;
                    width: 305px;
                    padding: 5px;
                    background: skyblue;
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
        </div>
    </body>
</html>