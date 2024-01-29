@extends('layout.design')
@section('content')



    <style>
  
        #zone {
            margin-left: 2px;
            margin-bottom: 20px;
            font-family: 'Times New Roman', Times, serif;
            
        }
        
        .table {
            margin-bottom: 20px;
            margin-left: -5px;
        }
    </style>
    <div class="container pt-4 px-4" style="margin-left: 120px;">
        <h4 class="main-title p-4">Add ERT Members</h4><br>
        
        <div class="row gx-5">
            <div class="col-md-4">
                <label for="zone_name" class="form-label"> Zone*</label>
                <select name="zone" id="zone" class="form-select" aria-label="Select Zone">
                    <option selected disabled>Select Zone</option>
                    <option value="zone1">Zone 1</option>
                    <option value="zone2">Zone 2</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
            <div class="col-md-4">
                <label for="zone_name" class="form-label"> Zone Name</label>
                <input type="text" name="zone" id="zone"class="form-control" placeholder="Zone1" disabled>
            </div>
            <div class="col-md-4">
                <label for="zone_name" class="form-label"> Department</label>
                <input type="text" name="zone" id="zone"class="form-control" placeholder="Assembly" disabled>
            </div>
        </div>

      

        <div class="row">
            <div class="col-md-3">
                <label for="zone_name" class="form-label"></label>
                <input type="text" name="zone" id="zone" class="form-control" placeholder="Search Emp Name or Number">
            </div>
            <div class="col-md-1" style="margin-top: 25px;">
                <button type="button" class="btn btn-primary">Search</button>
            </div>
        </div>
      
                  <table class="table table-bordered" style="margin-top:40px;">
                    <thead class="table table-bordered">
                        <tr>
                            <th scope="col"> Name</th>
                            <th scope="col">Phone No</th>
                            <th scope="col">Aadhar Number</th>
                            <th scope="col">Department</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>Zone 1</td>
                        <td>John</td>
                        <td>Xyz</td>
                        <td>9876543021</td>
                        <td>ABCD</td>
                        <td><a href="#" title="Add">
                            <i class="fas fa-plus-circle" style="color: rgb(30, 98, 247); position:absolute; margin-left:30px;"></i></td>
                        </a>
                    </tr>

                   
                  </table>
    

                    <table class="table table-bordered" style="margin-top:100px;">
                        <thead class="table">
                            <tr>
                                <th scope="col"> Name</th>
                                <th scope="col">Phone No</th>
                                <th scope="col">Aadhar Number</th>
                                <th scope="col">Department</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Specialization</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>Zone 1</td>
                            <td>John</td>
                            <td>Xyz</td>
                            <td>9876543021</td>
                            <td>ABCD</td> 
                            <td><select name="specialization" id="specialization" class="form-select">
                                <option value="spec1">Specialization </option>
                                <option value="spec2">Specialization 1</option>
                                <option value="spec1">Specialization 2</option>
                                <!-- Add more options as needed -->
                            </select></td>  
                            <td>
                                <a href="#" title="Delete"><i class="fas fa-trash" style="color: red"></i></a>
                            </td>
                        </tr>
                    <tbody>
                </table>
                <div class="row">
                <div class="col-md-1">
                    <button type="button" class="btn btn-danger"  style="margin-left:50px;">Cancel</button>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-success" style="margin-left:900px;">Update</button>
                </div>
                </div>

        </section>
    </div>
    @endsection
