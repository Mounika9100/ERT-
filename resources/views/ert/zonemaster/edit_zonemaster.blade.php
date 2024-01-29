@extends('layout.design')
@section('content')


    <style>
  
        #zone {
            margin-left: 20px;
            margin-bottom: 20px;
            font-family: 'Times New Roman', Times, serif; 
        }

        .table {
            margin-bottom: 20px;
            margin-left: -5px;
        }
        .d{

            margin-left: 30px;
        }

        .container {

        margin-left: 110px;
    }
    .col-md-4 {
        margin-right: 120px; 
        
    }

    .col-md-4:last-child {
        margin-right: 0;
        
    }
     
    #z{

        margin-left: 30px;
    }

    .custom-margin {

        margin-left: 20px;
    }
    
    .plus-icon {
        
        color: rgb(39, 92, 236);
        font-size: 30px;
        margin-top: -35px; 
        margin-left: 10px; 
        position: absolute;
    }

    </style>

    <div class="container pt-4 px-4" style="margin-left:120px;">
        <h4 class="main-title p-4">Edit Zone Master</h4><br>
        
        <div class="row gx-5">
            
            <div class="col-md-4">
                <label for="zone_name" class="form-label" id="z"> Zone Name*</label>
                <input type="text" name="zone" id="zone"class="form-control" placeholder="Enter Zone Name">
            </div>
            <div class="col-md-4" style="margin-right: 100px;">
                <label for="details" class="form-label" id="d;">
                    <h6>Details*</h6>
                </label>
                <div class="form-floating" style="width: 500px;">
                    <textarea class="form-control" name="details" placeholder="Enter Details" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Enter Details</label>
                </div>
            </div>
        </div><br><br>
        <div class="col-md-3 custom-margin">
            <label for="add_dept" class="form-label" style="font-weight:bold;">Add Department</label>
            <select name="dept" id="dept" class="form-select" aria-label="Add Department">
                <option selected disabled>Add Department</option>
                <option value="zone1">A</option>
                <option value="zone2">B</option>
                <!-- Add more options as needed -->
            </select>
            <div class="col-md-6">
                <a href="{{ route('zonemaster.edit', ['id' => $zone->id]) }}">Edit</>
                ">
                <i class="fas fa-plus-circle plus-icon" style="font-size:30px; margin-left:350px;"></i>
                </a>
            </div>
        </div>
        <br>
        <br>
             <div>
                <label for="add_dept" class="form-label" style="font-weight:bold; margin-top:20px;">Added Department</label>
            </div>
                  <table class="table table-bordered">
                    <tr>
                        <td>Assembly</td>
                        <td><i class="fas fa-trash delete-icon" style="color: red"></i></td>
                    </tr>
                    <tr>
                        <td>GD</td>
                        <td><i class="fas fa-trash delete-icon" style="color: red"></i></td>
                    </tr>
                    <tr>
                        <td>TNGA</td>
                        <td><i class="fas fa-trash delete-icon" style="color: red"></i></td>
                    </tr>
                  </table>
                <div class="row">
                <div class="col-md-1">
                    <button type="button" class="btn btn-danger"  style="margin-left:50px;">Cancel</button>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-success" style="margin-left:900px; ">Update</button>
                </div>
                </div>
        </section>
    </div>
    <script>
        $(document).ready(function () {

            // Function to handle row deletion
            function deleteRow(row) {
                row.remove();
            }

            // Event handler for clicking delete icon
            $(document).on('click', '#dept_table a.text-danger', function (e) {
                e.preventDefault();
                var row = $(this).closest('tr');
                deleteRow(row);
            });

            // Function to update the data
            $('#update_btn').click(function () {
                var zoneName = $('#zone').val();
                var details = $('#floatingTextarea').val();

                var deptIds = [];
                $('#dept_table tr').each(function () {
                    var deptId = $(this).find('td:eq(0)').text().trim();
                    deptIds.push({
                        dept_id: deptId
                    });
                });

                var zoneId = '{{ $zone->id }}'; // Ensure $zone is available in the view

                $.ajax({
                    type: 'PUT',
                    url: '{{ route('zonemaster.update', zoneId) }}',
                    data: {
                        zone_name: zoneName,
                        details: details,
                        dept_ids: deptIds,
                        
                        
                    },
                    success: function (response) {
                        alert(response.success);
                        window.location.replace('{{ route('zonemaster.index') }}');
                    }
                })
                });
            });
    @endsection
