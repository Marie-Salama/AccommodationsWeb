<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\User;
use App\Models\Accommodation;
use App\Models\Rental;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class rentalController extends Controller
{

    public function index($accommodation_id)
    {
        $accommodation = Accommodation::find($accommodation_id);
        if (!$accommodation) {
            return redirect()->route('error.page', ['message' => 'Accommodation not found']);
        }

        return view('auth.rentalForm', compact('accommodation', 'accommodation_id'));
    }

    public function rentalForm($accommodation_id)
{
    $accommodation = Accommodation::find($accommodation_id);
    if (!$accommodation) {
        return redirect()->route('error.page', ['message' => 'Accommodation not found']);
    }

    return view('rental.form', compact('accommodation'));
}
    public function store_rental(Request $request)
    {
        $user_id = Auth::id();
        $data = request()->all();
        $image = request('img')->store('receipts', 'public');
        $refrence_number = request('reference_number');
        $end_date = request('end_date');
        //$start_date = created_at()->addDays(5)->format('Y-m-d');
        $start_date = now()->addDays(5)->format('Y-m-d');
        $accommodation_id = $request->input('accommodation_id');
        // $accommodation_id = $data['accommodation_id'];
        //$user_id = Auth::id(); // Get the ID of the currently authenticated user
        //$accommodation_id=Accommodation::where('id',$accommodation_id)->first()->id;
        $rental = Rental::create([
            'start_date'=>$start_date,
            'end_date' => $end_date,
            'reference_number' => $refrence_number,
            'user_id' => $user_id,
            'accommodations_id' => $accommodation_id,
            'receipt' => $image,
            'confirmed'=>0,
        ]);
        // return to_route(route:'accommodation.showAll');
        return response()->json(['rental' => $rental], 201);
    }

//     public function store_rental(Request $request)
// {
//     // Retrieve the authenticated user's ID
//     $user_id = Auth::id();

//     // Retrieve the request data
//     $reference_number = $request->input('reference_number');
//     $end_date = $request->input('end_date');
//     $start_date = now()->addDays(5)->format('Y-m-d');
//     $accommodations_id = $request->input('accommodation_id'); // Rename to accommodations_id

//     // Retrieve the uploaded image file
//     $receipt = $request->file('img'); // Rename to receipt

//     // Check if an image was uploaded
//     if ($receipt) { // Change variable name to receipt
//         // Generate a unique name for the image
//         $imageName = time() . '_' . $receipt->getClientOriginalName(); // Change variable name to receipt

//         // Store the image in the storage directory
//         $receiptPath = $receipt->storeAs('public/receipts', $imageName); // Change variable name to receiptPath

//         // Create the rental record with the image path
//         Rental::create([
//             'start_date' => $start_date,
//             'end_date' => $end_date,
//             'reference_number' => $reference_number,
//             'user_id' => $user_id,
//             'accommodations_id' => $accommodations_id, // Rename to accommodations_id
//             'receipt' => $receiptPath, // Change variable name to receiptPath
//             'confirmed' => 0,
//         ]);

//         // Return a response indicating success
//         return response()->json(['message' => 'Rental created successfully'], 201);
//     } else {
//         // If no image was uploaded, return an error response
//         return response()->json(['error' => 'No image uploaded'], 400);
//     }
// }
}
