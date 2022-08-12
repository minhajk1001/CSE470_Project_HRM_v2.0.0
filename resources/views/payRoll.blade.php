<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pay Roll System</title>
    </head>
    <body>
    <h2 class="text-center">Pay Roll System</h2>
        <form method="post" action="giveSalary">
            @csrf
            <label>Bank Account No:</label>
                <input type="number" name="ID" required>
            <label>Salary of the month of:</label>
                <select name="month" class="select" required>
                    <option value=""></option>
                    <option value="Jan">jan</option>
                    <option value="Feb">Feb</option>
                    <option value="Mar">Mar</option>
                    <option value="Apr">Apr</option>
                    <option value="May">May</option>
                    <option value="Jun">Jun</option>
                    <option value="Jul">Jul</option>
                    <option value="Aug">Aug</option>
                    <option value="Sep">Sep</option>
                    <option value="Oct">Oct</option>
                    <option value="Nov">Nov</option>
                    <option value="Dec">Dec</option>
                </select>
            <button type="submit"  value ="Add Employee">Submit</button>
        </form>

        <style>
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

    <div class="container">
            <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Designation</th>
                    <th>Bank Account No</th>
                    <th>Salary</th>
                    <th>Salary Status</th>
                </tr>
            </thead>
                <tbody>
                @foreach ($employee as $employee)
                    <tr>
                        <td>{{ $employee->ID }}</td>
                        <td>{{ $employee->fullName }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->designation }}</td>
                        <td>{{ $employee->bankAccountNo }}</td>
                        <td>{{ $employee->salary }}</td>
                        <td>{{ $employee->salaryStatus }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <style>
            body{
                background-color: #f2f2f2;
            }
            h2, h3{
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
                text-align: left;
                padding: 8px;
            }
        </style>
    </body>
</html>