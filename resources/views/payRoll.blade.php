<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pay Roll System</title>
    </head>
    <body>
    <div class="container">
            <h2 class="text-center">Pay Roll System</h2>

            <form method="post" action="whatever">
                @csrf
                <label>ID:</label>
                    <input type="number" name="ID" required>
                <button type="submit"  value ="Add Employee">Submit</button>
            </form>
        </div>
    </body>
</html>