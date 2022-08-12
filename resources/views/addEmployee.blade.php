<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add New Employee</title>
    </head>

    <body>
        <div class="container">
            <h2 class="text-center">Add New Employee</h2>

            <form method="post" action="submit">
                @csrf
                <label>ID:</label>
                    <input type="number" name="ID">
                <label>Full Name:</label>
                    <input type="text" name="fullName">
                <label>Email:</label>
                    <input type="email" name="email">
                <label>City Name:</label>
                <select name="designation">
                    <option value="Senior System Designer">Senior System Designer</option>
                    <option value="Junior Software Engineer">Junior Software Engineer</option>
                    <option value="Java Developer">Java Developer</option>
                    <option value=".NET Developer">.NET Developer</option>
                    <option value="Programmer">Programmer</option>
                    <option value="Programmer Analyst">Programmer Analyst</option>
                    <option value="Senior Programmer Analyst">Senior Programmer Analyst</option>
                    <option value="Senior System Architect">Senior System Architect</option>
                    <option value="Systems Software Engineer">Systems Software Engineer</option>
                </select>
                <label>Bank Account No.:</label>
                    <input type="number" name="bankAccountNo">
                <label>Salary:</label>
                    <input type="text" name="salary"><br>
                <label>Salary Status:</label>
                <select name="salaryStatus">
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
        </div>
    </body>
</html>