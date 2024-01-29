<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErtmemberController extends Controller
{
    public function index(){

        return view ('ert.ertmember.ert_members');
    }

    public function create(){

        return view ('ert.ertmember.add_ertmembers');
    }

    public function edit(){

        return view ('ert.ertmember.edit_ertmembers');
    }

    public function view(){

        return view ('ert.ertmember.view_ertmembers');
    }
}
