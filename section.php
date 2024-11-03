<html>
<head>
    <title>List of Sections</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="section.css">
</head>
<body>
    <div class="container">
        <div class="page-header">
            <h4>Administrator Panel / Section /</h4>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>List of Sections</h2>
            <button class="btn btn-primary"><i class="fas fa-plus"></i> New</button>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="dataTables_length" id="example_length">
                    <label>Show 
                        <select name="example_length" aria-controls="example" class="form-control form-control-sm" style="width: auto; display: inline-block;">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select> entries
                    </label>
                </div>
            </div>
            <div class="col-md-6 text-end">
                <div id="example_filter" class="dataTables_filter">
                    <label>Search:
                        <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example">
                    </label>
                </div>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Section</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>B</td>
                    <td>
                        <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>A</td>
                    <td>
                        <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>C</td>
                    <td>
                        <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>D</td>
                    <td>
                        <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="row">
            <div class="col-md-6">
                <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 4 of 4 entries</div>
            </div>
            <div class="col-md-6 text-end">
                <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                    <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="example_previous">
                            <a href="#" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                        </li>
                        <li class="paginate_button page-item active">
                            <a href="#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                        </li>
                        <li class="paginate_button page-item next disabled" id="example_next">
                            <a href="#" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+3i5d5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5g7v4l5Y5b5L5hb5