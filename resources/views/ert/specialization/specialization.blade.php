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
    <h4 class="main-title p-4">Specialization</h4><br>

    <section class="bg-light rounded border h-50 p-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h5 id="zone" style="color:black;"><b>Specialization Details</b></h5>
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route('specialization.add') }}">
                <i class="fas fa-plus-circle plus-icon" style="color: green; font-size:35px; 
                margin-bottom:10px; margin-right:50px;"></i>
                </a>
            </div>
        </div>

                  <table class="table" >
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Specialization</th>
                            <th scope="col">Details</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                            
                        </tr>
                    </thead>
                    <tr>
                        <td>Zone 1</td>
                        <td>John</td>
                        <td>Xyz</td>
                        
                        
                        <td>
                            <a href="#" title="Edit"><i class="fas fa-edit" style="color: rgb(25, 156, 207)"></i></a>
                            <a href="#" title="View"><i class="fas fa-eye"></i></a>
                            <a href="#" title="Delete"><i class="fas fa-trash" style="color: red"></i></a>
                        </td>
                    </tr>
                    <tbody>
                </table>
            
        </section>
    </div>

    @endsection
