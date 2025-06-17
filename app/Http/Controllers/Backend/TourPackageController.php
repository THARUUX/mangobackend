<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\TourPackage;
use App\Models\TourItinerary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TourPackageController extends Controller
{
    public function index()
    {
        $tourPackages = TourPackage::orderBy('created_at', 'desc')->get();
        $totalPackages = TourPackage::count();
        return view('backend.pages.tour_package.index', compact('tourPackages', 'totalPackages'));
    }

    public function create()
    {
        return view('backend.pages.tour_package.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|in:tailor-made,round-tour',
            'price' => 'required|numeric',
            'duration' => 'required|string|max:100',
            'short_description' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'locations' => 'required|string',
            'included' => 'required|array',
            'excluded' => 'required|array',
            'featured' => 'boolean',
            'active' => 'boolean',
            'itinerary' => 'required|array',
            'itinerary.*.day' => 'required|integer',
            'itinerary.*.title' => 'required|string',
            'itinerary.*.location' => 'required|string',
            'itinerary.*.description' => 'required|string',
            'itinerary.*.image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload
        $imagePath = $request->file('image')->store('tour_packages', 'public');

        // Create tour package
        $tourPackage = TourPackage::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'type' => $request->type,
            'price' => $request->price,
            'duration' => $request->duration,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'image' => $imagePath,
            'locations' => $request->locations,
            'included' => $request->included,
            'excluded' => $request->excluded,
            'featured' => $request->has('featured'),
            'active' => $request->has('active'),
        ]);

        // Create tour itinerary
        foreach ($request->itinerary as $day) {
            $itineraryImagePath = null;
            if (isset($day['image']) && $day['image']) {
                $itineraryImagePath = $day['image']->store('tour_itineraries', 'public');
            }

            TourItinerary::create([
                'tour_package_id' => $tourPackage->id,
                'day' => $day['day'],
                'title' => $day['title'],
                'location' => $day['location'],
                'description' => $day['description'],
                'image' => $itineraryImagePath,
            ]);
        }

        return redirect()->route('admin.tour_packages')->with('success', 'Tour package created successfully!');
    }

    public function edit($id)
    {
        $tourPackage = TourPackage::with('itinerary')->findOrFail($id);
        return view('backend.pages.tour_package.edit', compact('tourPackage'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|in:tailor-made,round-tour',
            'price' => 'required|numeric',
            'duration' => 'required|string|max:100',
            'short_description' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'locations' => 'required|string',
            'included' => 'required|array',
            'excluded' => 'required|array',
            'featured' => 'boolean',
            'active' => 'boolean',
            'itinerary' => 'required|array',
            'itinerary.*.id' => 'nullable|exists:tour_itineraries,id',
            'itinerary.*.day' => 'required|integer',
            'itinerary.*.title' => 'required|string',
            'itinerary.*.location' => 'required|string',
            'itinerary.*.description' => 'required|string',
            'itinerary.*.image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $tourPackage = TourPackage::findOrFail($id);

        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($tourPackage->image) {
                Storage::disk('public')->delete($tourPackage->image);
            }
            $imagePath = $request->file('image')->store('tour_packages', 'public');
        } else {
            $imagePath = $tourPackage->image;
        }

        // Update tour package
        $tourPackage->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'type' => $request->type,
            'price' => $request->price,
            'duration' => $request->duration,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'image' => $imagePath,
            'locations' => $request->locations,
            'included' => $request->included,
            'excluded' => $request->excluded,
            'featured' => $request->has('featured'),
            'active' => $request->has('active'),
        ]);

        // Get existing itinerary item IDs
        $existingItineraryIds = $tourPackage->itinerary->pluck('id')->toArray();
        $updatedItineraryIds = [];

        // Update existing itinerary items and create new ones
        foreach ($request->itinerary as $day) {
            if (isset($day['id'])) {
                // Update existing itinerary item
                $itinerary = TourItinerary::find($day['id']);

                if ($itinerary) {
                    $itineraryImagePath = $itinerary->image;

                    // Handle image upload if a new image is provided
                    if (isset($day['image']) && $day['image']) {
                        // Delete the old image if it exists
                        if ($itinerary->image) {
                            Storage::disk('public')->delete($itinerary->image);
                        }
                        $itineraryImagePath = $day['image']->store('tour_itineraries', 'public');
                    }

                    $itinerary->update([
                        'day' => $day['day'],
                        'title' => $day['title'],
                        'location' => $day['location'],
                        'description' => $day['description'],
                        'image' => $itineraryImagePath,
                    ]);

                    $updatedItineraryIds[] = $itinerary->id;
                }
            } else {
                // Create new itinerary item
                $itineraryImagePath = null;
                if (isset($day['image']) && $day['image']) {
                    $itineraryImagePath = $day['image']->store('tour_itineraries', 'public');
                }

                $newItinerary = TourItinerary::create([
                    'tour_package_id' => $tourPackage->id,
                    'day' => $day['day'],
                    'title' => $day['title'],
                    'location' => $day['location'],
                    'description' => $day['description'],
                    'image' => $itineraryImagePath,
                ]);

                $updatedItineraryIds[] = $newItinerary->id;
            }
        }

        // Delete itinerary items that were not updated or created
        $removedItineraryIds = array_diff($existingItineraryIds, $updatedItineraryIds);
        foreach ($removedItineraryIds as $itineraryId) {
            $itinerary = TourItinerary::find($itineraryId);
            if ($itinerary) {
                // Delete the image if it exists
                if ($itinerary->image) {
                    Storage::disk('public')->delete($itinerary->image);
                }
                $itinerary->delete();
            }
        }

        return redirect()->route('admin.tour_packages')->with('success', 'Tour package updated successfully!');
    }

    public function delete($id)
    {
        $tourPackage = TourPackage::findOrFail($id);

        // Delete associated itinerary images
        foreach ($tourPackage->itinerary as $itinerary) {
            if ($itinerary->image) {
                Storage::disk('public')->delete($itinerary->image);
            }
        }

        // Delete tour package image
        if ($tourPackage->image) {
            Storage::disk('public')->delete($tourPackage->image);
        }

        // Delete associated itinerary items
        $tourPackage->itinerary()->delete();

        // Delete the tour package
        $tourPackage->delete();

        return redirect()->route('admin.tour_packages')->with('success', 'Tour package deleted successfully!');
    }
}
