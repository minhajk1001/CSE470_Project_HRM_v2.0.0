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
                    <input type="number" name="ID" required>
                <label>Full Name:</label>
                    <input type="text" name="fullName" required>
                <label>Email:</label>
                    <input type="email" name="email" required>
                <label>Designation:</label>
                <select name="designation" class="select" required>
                    <option value=""></option>
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
                    <input type="number" name="bankAccountNo" required>
                <label>Salary:</label>
                    <input type="text" name="salary" required><br>
                <label>Salary Status:</label>
                <select name="salaryStatus" class="select" required>
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
        </div>
        <style type="text/css">
            div {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
            }
            label{
                
            }
            h2{
                text-align: center;
            }

            form {  
                align: center;
                max-width: 280px;
                margin: auto;
                padding: 0;    
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
                margin: 30px 2px;
                cursor: pointer;
            }
            input[type=text]{
                text-align: center;
                width: 300px;
                padding: 5px;
	        }
            input[type=number]{
                text-align: center;
                width: 300px;
                padding: 5px;
	        }
            input[type=email]{
                text-align: center;
                width: 300px;
                padding: 5px;
	        }
            .select{
                text-align: center;
                width: 315px;
                padding: 5px;
            }
        </style>
    </body>
</html>