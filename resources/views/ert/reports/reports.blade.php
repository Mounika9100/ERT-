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
        .button4 {
            
            border-radius: 20px;
            background-color: #04AA6D;
            width: 50px;
            height: 25px;
            margin-left: 1000px;
            position: absolute;
            top: 170px;
            right: 500px;
            display: inline-block;
        }

        .button5 {
           border-radius: 20px;
           background-color: red; 
           width: 50px;
           height: 25px;
           margin-left: 5px; 
           position: absolute;
           top: 170px;
           right: 300px;
           display: inline-block;
}

        .button-text1 {
        font-weight: bold;
        margin-left: 760px;
        position: absolute; 
        display: inline-block;
        top: 170px;
        
}

       .button-text2 {
        font-weight: bold;
        margin-left: 960px;
        position: absolute; 
        display: inline-block;
        top: 170px;
        
}

    </style>
    <div class="container pt-4 px-4" style="margin-left: 120px;">
        <h4 class="main-title p-4">Reports</h4><br>

        <span class="button button4"></span>
        <span class="button-text1">Available</span>

        <span class="button button5"></span>
        <span class="button-text2">Not Available</span>


        <div class="row">
            <div class="col-md-3">
                
                <select name="zone" id="zone" class="form-select" aria-label="Select Zone">
                    <option selected disabled>Select Zone</option>
                    <option value="zone1">Zone 1</option>
                    <option value="zone2">Zone 2</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
            <div class="col-md-1" style="margin-top: 1px;">
                <button type="button" class="btn btn-primary">Search</button>
            </div>
        </div> <br><br>

            <section class="bg rounded border h-50 p-4">
            <div class="row">
                <h6 id="zone" style="color:black;">Zone Name:Zone1</h6>
                <div class="col-md-6 text-end" style="margin-top: -40px; margin-left: 500px;">
                    <h6 id="zone" style="color: black;">Last updated on: 01/26/2024 @8:30AM</h6>
                </div>
            </div>
                  <table class="table table-bordered" style="margin-top: 10px;">
                    <thead class="table">
                        <tr>
                            <th scope="col">SI No</th>
                            <th scope="col">Profile Picture</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Department</th>
                            <th scope="col">Specialization</th>
                            <th scope="col">Availability</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>Zone 1</td>
                        <td>
                            <i class="fas fa-user" style="color:rgb(243, 157, 243);"></i>
                        </td>
                        <td>Xyz</td>
                        <td>9876543021</td>
                        <td>ABCD</td>
                        <td>ABCD</td>
                        <td style="position: relative;">
                            <span class="button button4" style="position: absolute; margin-right:-400px; top:10px;"></span>
                        </td>
                    </tr>

                    <tr>
                        <td>Zone 1</td>
                        <td>
                            <i class="fas fa-user" style="color: rgb(243, 157, 243);"></i>
                        </td>
                        <td>Xyz</td>
                        <td>9876543021</td>
                        <td>ABCD</td>
                        <td>ABCD</td>
                        <td style="position: relative;">
                            <span class="button button4" style="position: absolute; margin-right:-400px; top:10px;"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Zone 1</td>
                        <td>
                            <i class="fas fa-user" style="color: rgb(243, 157, 243);"></i>
                        </td>
                        <td>Xyz</td>
                        <td>9876543021</td>
                        <td>ABCD</td>
                        <td>ABCD</td>
                        <td style="position: relative;">
                            <span class="button button5" style="position: absolute; margin-right:-200px; top:10px;"></span>
                        </td>
                    </tr>
                    <tbody>
                </table>
            </div>
        </section>
    
    @endsection
