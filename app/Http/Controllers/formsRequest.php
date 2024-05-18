<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormRequest;

class FormRequestController extends Controller 
{
    protected $formPrices = [
        'diploma replacement' => 100.00,
        'evaluation' => 50.00,
        'honorable dismissal' => 100.00,
        'correction of name' => 100.00,
        'transcript of record' => 125.00,
        'permit to study' => 100.00,
        'rush fee' => 100.00,
        'form 137' => 100.00,
    ];

    // Create a new form request record
    public function createFormRequest(Request $request)
    {
        
    }

    // Get specific form request details
    public function getFormRequestDetails($id)
    {
        
    }

    // Get all form request records
    public function getAllFormRequests()
    {
        
    }

    // Update form request record
    public function updateFormRequest(Request $request, $id)
    {
        
    }

    // Cancel form request (soft delete)
    public function cancelFormRequest($id)
    {
        
    }

    // Delete form request (permanent delete)
    public function deleteFormRequest($id)
    {
        
    }
}
