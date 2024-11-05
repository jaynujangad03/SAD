<html>
<head>
    <title>Administrator Panel / Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="report.css">
</head>
<body>
<div class="header">
    <a href="#">Administrator Panel / Report</a>
</div>
<div class="form-inline">
    <label for="location" class="form-label">Location:</label>
    <select class="form-control" id="location">
        <option>PUNTA LOOC CEMETERY</option>
    </select>
    <label for="section" class="form-label">Section:</label>
    <select class="form-control" id="section">
        <option>A</option>
    </select>
    <button class="btn btn-primary"><i class="fas fa-search"></i> Search</button>
</div>
<div class="table-container">
    <h5>Looc Cemetery</h5>
    <p>Looc Romblon Cemetery, Looc, Romblon</p>
    <h4>List of Deceased Person</h4>
    <button class="btn btn-primary btn-print"><i class="fas fa-print"></i> Print Report</button>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Grave #</th>
                <th>Name of the Deceased</th>
                <th>Born</th>
                <th>Died</th>
                <th>Section</th>
                <th>Location</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>BALBINO B. GABUNA</td>
                <td>31-Mar</td>
                <td>31-Mar</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>744</td>
                <td>LEOVIGILDO MANDINGUIADO</td>
                <td></td>
                <td>SEPT. 1, 1987</td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>