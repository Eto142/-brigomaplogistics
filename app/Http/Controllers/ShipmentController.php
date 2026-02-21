<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
// use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade\Pdf; // <--- note the alias "Pdf"
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ShipmentController extends Controller
{
    // Show booking form (Registration)
    public function create()
    {
        return view('shipment.book');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'tracking_number' => 'required|string|unique:shipments,tracking_number',
            'reference_no' => 'nullable|string',
            'status' => 'required|string',
            'origin' => 'required|string',
            'destination' => 'required|string',
            'shipment_date' => 'nullable|date',
            'carrier' => 'nullable|string',
            'shipment_mode' => 'nullable|string',
            'shipment_type' => 'nullable|string',
            'package_type' => 'nullable|string',
            'product' => 'nullable|string',
            'payment_mode' => 'nullable|string',
            'total_freight' => 'nullable|string',
            'value' => 'nullable|string',
            'currency' => 'nullable|string',
            'departure_time' => 'nullable|string',
            'expected_delivery_date' => 'nullable|string',
            'pickup_date' => 'nullable|string',
            'pickup_time' => 'nullable|string',

            'shipper_name' => 'required|string',
            'shipper_company' => 'nullable|string',
            'shipper_address' => 'required|string',
            'shipper_city' => 'nullable|string',
            'shipper_country' => 'nullable|string',
            'shipper_phone' => 'nullable|string',
            'shipper_postal_code' => 'nullable|string',

            'receiver_name' => 'required|string',
            'receiver_company' => 'nullable|string',
            'receiver_address' => 'required|string',
            'receiver_city' => 'nullable|string',
            'receiver_country' => 'nullable|string',

            'quantity' => 'nullable|integer',
            'piece_type' => 'nullable|string',
            'height' => 'nullable|string',
            'weight' => 'nullable|string',
            'description' => 'nullable|string',
            'comments' => 'nullable|string',
        ]);

    // Generate unique AWB Number
    // $validated['awb_number'] = $this->generateAwb();

    // Create shipment
    $shipment = Shipment::create($validated);

    // Generate PDF
    $pdf = PDF::loadView('shipment.pdf_receipt', compact('shipment'));

    // Save PDF to public storage
    $pdfPath = 'shipments/awb_' . $shipment->tracking_number . '.pdf';
    Storage::disk('public')->put($pdfPath, $pdf->output());

//     // Pass data to session for modal + download
//     return redirect()->route('admin.book')
//         ->with([
//             'success' => 'Shipment booked successfully.',
//             'awb_number' => $shipment->awb_number,
//             'pdf_path' => asset('storage/' . $pdfPath) // use asset for JS download
//         ]);
// }

    return redirect()->route('admin.book')
        ->with([
            'success' => 'Shipment booked successfully.',
            'tracking_number' => $shipment->tracking_number,
            'pdf_path' => route('shipment.download', $shipment->tracking_number)
        ]);
    }



public function downloadPdf($awb)
{
    $filePath = 'shipments/awb_' . $awb . '.pdf';

    if (!Storage::disk('public')->exists($filePath)) {
        abort(404, 'PDF not found');
    }

    // Serve the PDF for download
    return response()->download(storage_path('app/public/' . $filePath), 'awb_' . $awb . '.pdf');
}





// public function store(Request $request)
// {
//     $validated = $request->validate([
//          'status' => 'required|string',
//         'origin' => 'required|string',
//         'destination' => 'required|string',
//         'shipment_date' => 'required|date',
//         'shipment_type' => 'required|string',
//         'declared_carriage' => 'nullable|numeric',
//         'declared_customs' => 'nullable|numeric',
//         'currency' => 'required|string',

//         'shipper_company' => 'required|string',
//         'shipper_department' => 'nullable|string',
//         'shipper_contact' => 'required|string',
//         'shipper_address' => 'required|string',
//         'shipper_city' => 'required|string',
//         'shipper_country' => 'required|string',
//         'shipper_phone' => 'required|string',
//         'origin_airport' => 'required|string',

//         'receiver_company' => 'required|string',
//         'receiver_contact' => 'required|string',
//         'receiver_address' => 'required|string',
//         'receiver_city' => 'required|string',
//         'receiver_country' => 'required|string',
//         'destination_airport' => 'required|string',

//         'pieces' => 'required|integer|min:1',
//         'gross_weight' => 'required|numeric',
//         'chargeable_weight' => 'required|numeric',
//         'goods_description' => 'required|string',

//         'transport_charges' => 'required|string',
//         'duties_taxes' => 'required|string',
//         'insurance_amount' => 'nullable|numeric',
//     ]);

//     // Generate unique AWB Number
//     $validated['awb_number'] = $this->generateAwb();

//     // Create shipment
//     $shipment = Shipment::create($validated);

//     // Generate PDF
//     $pdf = PDF::loadView('shipment.pdf_receipt', compact('shipment'));

//     // Save PDF to public storage
//     $pdfPath = 'shipments/awb_' . $shipment->awb_number . '.pdf';
//     Storage::disk('public')->put($pdfPath, $pdf->output());

    

//     // Pass AWB number and PDF path to modal
//     return redirect()->route('admin.book')
//         ->with([
//             'success' => 'Shipment booked successfully.',
//             'awb_number' => $shipment->awb_number,
//             'pdf_path' => asset('storage/' . $pdfPath)
//         ]);
// }




    // Simple AWB generator
    private function generateTrackingNumber()
    {
        do {
            $tracking = 'BGL-' . strtoupper(Str::random(8));
        } while (Shipment::where('tracking_number', $tracking)->exists());

        return $tracking;
    }



     // Track shipment form (Login)
    public function trackForm()
    {
        return view('shipment.track');
    }




    // Process tracking request
public function track(Request $request)
{
    $request->validate([
        'tracking_number' => 'required|exists:shipments,tracking_number',
    ]);

    // Get the shipment
    $shipment = Shipment::where('tracking_number', $request->tracking_number)->first();

    // If somehow $shipment is null (shouldn't happen because of validation)
    if (!$shipment) {
        return back()->withErrors(['tracking_number' => 'Shipment not found']);
    }

   // Fetch shipping history, latest first (top)
$history = $shipment->history()
    ->orderBy('date', 'desc')
    ->orderBy('time', 'desc')
    ->get();


    return view('shipment.home', compact('shipment', 'history'));
}


//    // Process tracking request
// public function track(Request $request)
// {
//     $request->validate([
//         'awb_number' => 'required|exists:shipments,awb_number',
//     ]);

//     // Get the shipment
//     $shipment = Shipment::where('awb_number', $request->awb_number)->first();

//     // If somehow $shipment is null (shouldn't happen because of validation)
//     if (!$shipment) {
//         return back()->withErrors(['awb_number' => 'Shipment not found']);
//     }

//     return view('shipment.home', compact('shipment'));
// }


// Delete shipment
public function destroy($id)
{
    $shipment = Shipment::findOrFail($id);

    // Delete attached PDF if it exists
    if ($shipment->awb_number) {
        $pdfPath = 'shipments/awb_' . $shipment->awb_number . '.pdf';
        if (Storage::disk('public')->exists($pdfPath)) {
            Storage::disk('public')->delete($pdfPath);
        }
    }

    $shipment->delete();

    return redirect()
        ->back()
        ->with('success', 'Shipment deleted successfully.');
}





// Show edit form
public function edit($id)
{
    $shipment = Shipment::findOrFail($id);
    return view('admin.shipments.edit', compact('shipment'));
}

// Update shipment
public function update(Request $request, $id)
{
    $shipment = Shipment::findOrFail($id);

        $validated = $request->validate([
            'tracking_number' => 'string|unique:shipments,tracking_number,' . $id,
            'reference_no' => 'nullable|string',
            'status' => 'string',
            'origin' => 'string',
            'destination' => 'string',
            'shipment_date' => 'nullable|date',
            'carrier' => 'nullable|string',
            'shipment_mode' => 'nullable|string',
            'shipment_type' => 'nullable|string',
            'package_type' => 'nullable|string',
            'product' => 'nullable|string',
            'payment_mode' => 'nullable|string',
            'total_freight' => 'nullable|string',
            'value' => 'nullable|string',
            'currency' => 'nullable|string',
            'departure_time' => 'nullable|string',
            'expected_delivery_date' => 'nullable|string',
            'pickup_date' => 'nullable|string',
            'pickup_time' => 'nullable|string',

            'shipper_name' => 'string',
            'shipper_company' => 'nullable|string',
            'shipper_address' => 'string',
            'shipper_city' => 'nullable|string',
            'shipper_country' => 'nullable|string',
            'shipper_phone' => 'nullable|string',
            'shipper_postal_code' => 'nullable|string',

            'receiver_name' => 'string',
            'receiver_company' => 'nullable|string',
            'receiver_address' => 'string',
            'receiver_city' => 'nullable|string',
            'receiver_country' => 'nullable|string',

            'quantity' => 'nullable|integer',
            'piece_type' => 'nullable|string',
            'height' => 'nullable|string',
            'weight' => 'nullable|string',
            'description' => 'nullable|string',
            'comments' => 'nullable|string',
        ]);

    $shipment->update($validated);

    return redirect()
        ->back()
        ->with('success', 'Shipment updated successfully.');
}


  
}
