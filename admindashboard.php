<!DOCTYPE html>
<html>
<head>
    <title>Cemetery Mapping and Information System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="navbar">
        <h4>Cemetery Information System</h4>
    </div>
    <div class="d-flex">
        <div class="sidebar">
            <a href="#" id="deceasedLink"><i class="fas fa-users"></i> Deceased Persons</a>
            <a href="#" id="sectionLink"><i class="fas fa-th-large"></i> Section</a>
            <a href="#"><i class="fas fa-file-excel"></i> Import Excel File</a>
            <a href="#"><i class="fas fa-user-cog"></i> Manage Users</a>
            <a href="#" id="reportLink"><i class="fas fa-chart-bar"></i> Report</a>
        </div>
        <div class="content flex-grow-1" id="content">
            <h1>Administrator Panel</h1>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            // Load deceased.php content when clicking "Deceased Persons"
            $('#deceasedLink').on('click', function(event){
                event.preventDefault();
                $('#content').load('deceased.php .container', function() {
                    $('#newPersonBtn').on('click', function(event) {
                        event.preventDefault();
                        $('#content').load('add.php .container');
                    });
                });
            });

            // Load section.php content when clicking "Section"
            $('#sectionLink').on('click', function(event){
                event.preventDefault();
                $('#content').load('section.php .container');
            });

            // Load report.php content when clicking "Report"
            $('#reportLink').on('click', function(event){
                event.preventDefault();
                $('#content').load('report.php .header, .form-inline, .table-container');
            });
        });
    </script>
</body>
</html>
