<html>
<head>
    <title>Add New Person</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            padding: 20px;
        }
        .form-label {
            font-weight: bold;
        }
        .form-control {
            margin-bottom: 10px;
        }
        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add New Person</h2>
        <form>
            <div class="form-group">
                <label for="number" class="form-label">Number:</label>
                <input type="text" class="form-control" id="number" placeholder="Grave Number">
            </div>
            <div class="form-group">
                <label for="fullName" class="form-label">Full Name:</label>
                <input type="text" class="form-control" id="fullName" placeholder="Full Name">
            </div>
            <div class="form-group">
                <label for="section" class="form-label">Section:</label>
                <select class="form-control" id="section">
                    <option>Select Section</option>
                </select>
            </div>
            <div class="form-group">
                <label for="born" class="form-label">Born:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                    <input type="date" class="form-control" id="born">
                </div>
            </div>
            <div class="form-group">
                <label for="died" class="form-label">Died:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                    <input type="date" class="form-control" id="died">
                </div>
            </div>
            <div class="form-group">
                <label for="location" class="form-label">Location:</label>
                <select class="form-control" id="location">
                    <option>Select Location</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</body>
</html>