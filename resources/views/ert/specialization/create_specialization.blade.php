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
        margin-top: -100px; 
        margin-left: 10px; 
    }

    </style>

    <div class="container pt-4 px-4" style="margin-left:120px;">
        <h4 class="main-title p-4">Add Specialization</h4><br>
        <form action="#" method="POST">
            @csrf
        
        <div class="row gx-5">
            
            <div class="col-md-4">
                <label for="zone_name" class="form-label" id="z"> Specialization*</label>
                <input type="text" name="zone" id="zone"class="form-control" placeholder="Enter Zone Name">
            </div>
            <div class="col-md-4" style="margin-right: 100px; margin-top: -5px;">
                <label for="details" class="form-label" id="d;">
                    <h6>Details*</h6>
                </label>
                <div class="form-floating" style="width: 500px;">
                    <textarea class="form-control" name="details" placeholder="Enter Details" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Enter Details</label>
                    <p class="details text-danger"></p>
                </div>
            </div>
        </div>
        <input id="protective_ids" type="hidden" name="protective_ids">
        <input id="saftey_ids" type="hidden" name="saftey_ids">
        <input id="equipments_ids" type="hidden" name="equipments_ids">
        <input id="checklist_ids" type="hidden" name="checklist_ids"> 
        <div class="row">
            <div class="col-md-1">
                <button type="button" class="btn btn-danger" style="margin-left:50px; position: relative;margin-top:40px;">Cancel</button>
            </div>
            <a href="#" ></a> 
            <div class="col-md-2 ml-auto">
                <button type="button" class="btn btn-success" style="margin-top:-70px; margin-left:800px;">Save</button>
            </div>
        </div>
        </section>
    </div>
    @endsection
