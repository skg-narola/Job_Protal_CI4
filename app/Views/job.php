<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post a Job</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Post a Job</h2>
        <form method="POST" action="addJob">
            

            <!-- Company Name Input -->
            <div class="form-group">
                <label for="companyName">Company Name:</label>
                <input type="text" class="form-control" id="companyName" placeholder="Enter the company name" name = "companyName">
            </div>

            <!-- Job Title Input
            <div class="form-group">
                <label for="jobTitle">Job Title:</label>
                <input type="text" class="form-control" id="jobTitle" placeholder="Enter the job title" name = "jobTitle">
            </div> -->

            <!-- Job Title Input -->
            <div class="form-group">
                <label for="jobTitle">Job Title:</label>
                <input type="text" class="form-control" id="jobTitle" placeholder="Enter the job title" name = "jobTitle">
            </div>

            <!-- Location Input -->
            <div class="form-group">
                <label for="jobLocation">Job Location:</label>
                <input type="text" class="form-control" id="jobLocation" placeholder="Enter the job location" name = "jobLocation">
            </div>

            <!-- Job Description Textarea -->
            <div class="form-group">
                <label for="jobDescription">Job Description:</label>
                <textarea class="form-control" id="jobDescription" rows="4" placeholder="Enter the job description" name = "jobDescription"></textarea>
            </div>

            

            <!-- Submit Button -->
            <input type="submit" value="Post Job" class="btn btn-primary">
           
        </form>
    </div>

    <!-- Add Bootstrap JS and jQuery scripts (if needed) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
