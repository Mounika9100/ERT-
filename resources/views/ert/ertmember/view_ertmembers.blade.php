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
        <h4 class="main-title p-4">View ERT Members</h4><br>
        
        <div class="row gx-">
            <div class="col-md-4">
                <label for="zone_name" class="form-label"> Zone*</label>
                <input type="zone" id="zone" class="form-control" aria-label="Select Zone" disabled>
            </div>
            <div class="col-md-4">
                <label for="zone_name" class="form-label"> Zone Name</label>
                <input type="text" name="zone" id="zone"class="form-control" placeholder="Zone1" disabled>
            </div>
            <div class="col-md-4">
                <label for="zone_name" class="form-label"> Department</label>
                <input type="text" name="zone" id="zone"class="form-control" placeholder="Assembly" disabled>
            </div>
        </div><br><br>
   
        <label for="zone_name" class="form-label" style="font-weight: bold;"> Added Employee</label>
      
                  <table class="table table-bordered" style="margin-top:40px;">
                    <thead class="table table-bordered">
                        <tr>
                            <th scope="col"> Name</th>
                            <th scope="col">Phone No</th>
                            <th scope="col">Aadhar Number</th>
                            <th scope="col">Department</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Specialization</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>Zone 1</td>
                        <td>John</td>
                        <td>Xyz</td>
                        <td>9876543021</td>
                        <td>ABCD</td>
                        <td>First Aid</td>
                    </tr>
                  </table><br><br>
                <div class="row">
                <div class="col-md-1">
                    <button type="button" class="btn btn-danger"  style="margin-left:10px;">Cancel</button>
                </div>
                
               

        </section>
    </div>
    @endsection


