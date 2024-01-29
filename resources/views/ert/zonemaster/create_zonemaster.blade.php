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
        .d {

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

        #z {

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
        <h4 class="main-title p-4">Add Zone Master</h4><br>

        <div class="row gx-5">

            <div class="col-md-4">
                <label for="zone_name" class="form-label" id="z"> Zone Name*</label>
                <input type="text" name="zone_name" id="zone_name"class="form-control" placeholder="Enter Zone Name">
            </div>
            <div class="col-md-4" style="margin-right: 100px;">
                <label for="details" class="form-label" id="d;">
                    <h6>Details*</h6>
                </label>
                <div class="form-floating" style="width: 500px;">
                    <textarea class="form-control" name="details" id="details"  placeholder="Enter Details" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Enter Details</label>
                </div>
            </div>
        </div><br><br>
        <div class="col-md-3 custom-margin">
            <label for="add_dept" class="form-label" style="font-weight:bold;">Add Department</label>
            <select name="dept" id="dept" class="form-select" aria-label="Add Department">
                <option selected disabled>Add Department</option>
                @foreach ($department as $row)
                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                @endforeach
                <!-- Add more options as needed -->
            </select>
            <div class="col-md-6">
                <a href="#" id="add_btn">
                    <i class="fas fa-plus-circle plus-icon" style="font-size:30px; margin-left:350px;"></i>
                </a>
            </div>
        </div>
        <br>
        <br>

        <div>
            <label for="add_dept" class="form-label" style="font-weight:bold; margin-top:20px;">Added Department</label>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="dept_table">

            </tbody>
        </table>
        <div class="row">
            <div class="col-md-1">
                <button type="button" class="btn btn-danger" style="margin-left:10px;">Cancel</button>
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-success" style="margin-left:900px; " id="save_btn">Save</button>
            </div>
        </div>
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>

$(document).ready(function () {
    // ...

    // Function to handle row deletion
    function deleteRow(row) {
        row.remove();
    }

    // Event handler for clicking delete icon
    $(document).on('click', '#dept_table a.text-danger', function (e) {
        e.preventDefault();
        var row = $(this).closest('tr');
        deleteRow(row);
    })
    });
        $(document).ready(function() {


            $('#add_btn').click(function() {
                var dept_id = $('#dept option:selected').val()
                var dept_name = $('#dept option:selected').text()

                var dis = `
                <tr>
                    <td style="display:none;">${dept_id}</td>
                    <td>${dept_name}</td>
                    <td>
                        <a href="#" class="text-danger" ><i class="fa fa-trash"></i> </a>
                    </td>
                </tr>`
                $('#dept_table').append(dis)
            })

            var dept_ids = []
            $('#save_btn').click(function() {
                // alert('clicked')
                $('#dept_table ').each(function() {
                    var row = $(this).closest('tr')
                    var dept_id = $(this).find('td:eq(0)').text().trim()

                    dept_ids.push({
                        dept_id: dept_id
                    })
                })
                console.log(dept_ids)

                var zone_name = $('#zone_name').val()
                var zone_details = $('#details').val()

                $.ajax({
                    type: 'POST',
                    url: '{{route('zonemaster.store')}}',
                    data: {
                        dept_ids: dept_ids,
                        zone_name: zone_name,
                        zone_details: zone_details,
                    },
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                     success: function(response) {
                        alert(response.success)
                        window.location.replace ('{{ route('zonemaster.index') }}'); 
                    }
                })

            })

        })
    </script>
@endsection
