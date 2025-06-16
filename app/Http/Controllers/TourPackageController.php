<?php

namespace App\Http\Controllers;

use App\Models\TourPackage;
use Illuminate\Http\Request;

class TourPackageController extends Controller
{
    public function index()
    {
        $tailorMadeTours = TourPackage::where('type', 'tailor-made')
            ->where('active', true)
            ->get();

        $roundTours = TourPackage::where('type', 'round-tour')
            ->where('active', true)
            ->get();

        return view('frontend.pages.tour_packages', compact('tailorMadeTours', 'roundTours'));
    }

    public function show($slug)
    {
        $tourPackage = TourPackage::where('slug', $slug)
            ->where('active', true)
            ->with('itinerary')
            ->firstOrFail();

        return view('frontend.pages.tour_package_detail', compact('tourPackage'));
    }

    public function tailorMade()
    {
        $tours = TourPackage::where('type', 'tailor-made')
            ->where('active', true)
            ->get();

        return view('frontend.pages.tailor_made_tours', compact('tours'));
    }

    public function roundTour()
    {
        $tours = TourPackage::where('type', 'round-tour')
            ->where('active', true)
            ->get();

        return view('frontend.pages.round_tours', compact('tours'));
    }

    public function inquire(Request $request)
    {
        $request->validate([
            'tour_id' => 'required|exists:tour_packages,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'date' => 'required|date',
            'adults' => 'required|integer|min:1',
            'message' => 'nullable|string',
        ]);

        // Here you would typically save the inquiry to database
        // and/or send an email notification

        return redirect()->back()->with('success', 'Your inquiry has been sent successfully! We will contact you soon.');
    }
}
