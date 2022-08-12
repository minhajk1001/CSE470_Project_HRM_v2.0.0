<!DOCTYPE html>
<html lang="en">
    <head>
        <title>View Employee Records</title>
    </head>
    <body>

        <div class="container">
        <h2 class="text-center">View Employee Records</h2>
                
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
    </body>
</html>