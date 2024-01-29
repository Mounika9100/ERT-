<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Zone;
use Illuminate\Http\Request;


class ZonemasterController extends Controller
{
    public function index()
    {

        return view('ert.zonemaster.zonemaster');
    }
    public function show()
    {

        return view('ert.zonemaster.create_zonemaster');
    }

    public function edit()
    {

        return view('ert.zonemaster.edit_zonemaster');
    }

    public function view()
    {

        return view('ert.zonemaster.view_zonemaster');
    }

    public function create()
    {
        $department = Department::all();
        return view('ert.zonemaster.create_zonemaster')->with('department', $department);
    }
    public function store(Request $request)
    {
        // dd($request->all());

        // Extract 'dept_id' values from the nested array
        $deptIds = array_column($request->dept_ids, 'dept_id');

        Zone::create([
            'name' => $request->zone_name, // Update to 'zone_name'
            'details' => $request->zone_details,
            'department_ids' => implode(',', $deptIds)
        ]);

        return response()->json(['success' => 'Zone created successfully']);
    }
    
    // app/Http/Controllers/ZoneMasterController.php


public function destroy($id)
{
    $zonemaster = ZoneMaster::find($id);

    if (!$zonemaster) {
        return response()->json(['success' => false, 'message' => 'ZoneMaster not found'], 404);
    }

    $zonemaster->delete();

    return response()->json(['success' => true, 'message' => 'ZoneMaster deleted successfully']);
}
 
public function w()
{
    $zones = Zone::all(); // Fetch the zones from your model

    return view('your.blade.view', compact('zones'));
}

public function edit2($id)
{
    // Find the zone by ID
    $zone = ZoneMaster::findOrFail($id);

    // Other logic as needed...

    // Return a view for editing with the zone data
    return view('ert.zonemaster.edit_zonemaster', compact('zone'));

}

    
   public function update(Request $request, $id)

  {
    return view('ert.zonemaster.update_zonemaster');
  }
}

      