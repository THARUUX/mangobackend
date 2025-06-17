@extends('backend.app')

@section('content')
<div class="page-header">
    <h1 class="page-title my-auto">Add New Tour Package</h1>
    <div>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="/admin/dashboard">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/admin/tour-packages">Tour Packages</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Add New</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form action="/admin/save-tour-package" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="card mb-4">
                <div class="card-header">
                    <div class="card-title">Basic Information</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Package Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                            @error('name')
                            <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="type" class="form-label">Package Type <span class="text-danger">*</span></label>
                            <select class="form-select" id="type" name="type" required>
                                <option value="">Select Package Type</option>
                                <option value="tailor-made" {{ old('type') == 'tailor-made' ? 'selected' : '' }}>Tailor Made</option>
                                <option value="round-tour" {{ old('type') == 'round-tour' ? 'selected' : '' }}>Round Tour</option>
                            </select>
                            @error('type')
                            <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="price" class="form-label">Price ($) <span class="text-danger">*</span></label>
                            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price') }}" required>
                            @error('price')
                            <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="duration" class="form-label">Duration <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="duration" name="duration" placeholder="e.g. 5 Days / 4 Nights" value="{{ old('duration') }}" required>
                            @error('duration')
                            <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="locations" class="form-label">Locations <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="locations" name="locations" placeholder="e.g. Kandy | Colombo | Galle" value="{{ old('locations') }}" required>
                            @error('locations')
                            <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3 d-flex align-items-end">
                            <div class="form-check me-4">
                                <input class="form-check-input" type="checkbox" id="featured" name="featured" value="1" {{ old('featured') ? 'checked' : '' }}>
                                <label class="form-check-label" for="featured" style="color: white">
                                    Featured
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="active" name="active" value="1" {{ old('active', '1') ? 'checked' : '' }}>
                                <label class="form-check-label" for="active" style="color: white">
                                    Active
                                </label>
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <label for="short_description" class="form-label">Short Description <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="short_description" name="short_description" rows="3" required>{{ old('short_description') }}</textarea>
                            @error('short_description')
                            <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 mb-3">
                            <label for="description" class="form-label">Full Description <span class="text-danger">*</span></label>
                            <textarea class="form-control tinymce" id="description" name="description" rows="6">{{ old('description') }}</textarea>
                            @error('description')
                            <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <div class="card-title">Featured Image</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="image" class="form-label">Package Image <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                                <div class="form-text">Recommended size: 1200px x 800px</div>
                                @error('image')
                                <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <img id="imagePreview" src="#" alt="Preview" style="max-width: 300px; max-height: 200px; display: none;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-title">Included/Excluded</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">Included Items <span class="text-danger">*</span></label>
                            <div id="includedItemsContainer">
                                <div class="input-group mb-2">
                                    <input type="text" class="form-control" name="included[]" placeholder="E.g. Airport pickup and drop-off" required>
                                    {{-- <button type="button" class="btn btn-danger remove-item" disabled>
                                        <i class="fi fi-rr-trash"></i>
                                    </button> --}}
                                </div>
                            </div>
                            {{-- <button type="button" class="btn btn-sm btn-success mt-2" id="addIncludedItem">
                                <i class="fi fi-rr-add"></i> Add Item
                            </button> --}}
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Excluded Items <span class="text-danger">*</span></label>
                            <div id="excludedItemsContainer">
                                <div class="input-group mb-2">
                                    <input type="text" class="form-control" name="excluded[]" placeholder="E.g. Personal expenses" required>
                                    {{-- <button type="button" class="btn btn-danger remove-item" disabled>
                                        <i class="fi fi-rr-trash"></i>
                                    </button> --}}
                                </div>
                            </div>
                            {{-- <button type="button" class="btn btn-sm btn-success mt-2" id="addExcludedItem">
                                <i class="fi fi-rr-add"></i> Add Item
                            </button> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-title">Itinerary</div>
                </div>
                <div class="card-body">
                    <div id="itineraryContainer">
                        <div class="itinerary-item card mb-4">
                            {{-- <div class="card-header bg-light d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Day 1</h5>
                                <button type="button" class="btn btn-sm btn-danger remove-itinerary" disabled>
                                    <i class="fi fi-rr-trash"></i> Remove
                                </button>
                            </div> --}}
                            <div class="card-body">
                                <div class="row">
                                    <input type="hidden" name="itinerary[0][day]" value="1" class="day-number">

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="itinerary[0][title]" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Location <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="itinerary[0][location]" required>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label class="form-label">Description <span class="text-danger">*</span></label>
                                        <textarea id="itinerary-description-1-{{ time() }}" class="form-control itinerary-description" name="itinerary[0][description]" rows="4" required></textarea>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">Image (Optional)</label>
                                        <input type="file" class="form-control itinerary-image" name="itinerary[0][image]" accept="image/*">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <button type="button" class="btn btn-success" id="addItineraryDay">
                        <i class="fi fi-rr-add"></i> Add Another Day
                    </button> --}}
                </div>
            </div>

            <div class="d-flex justify-content-end gap-2 mb-5">
                <a href="/admin/tour-packages" class="btn btn-light">Cancel</a>
                <button type="submit" class="btn btn-primary">Create Tour Package</button>
            </div>
        </form>
    </div>
</div>

@endsection

@push('scripts')
<!-- Include simplified JS for direct button functionality -->
<script src="{{ asset('js/simple-tour-form.js') }}"></script>

<!-- Fallback inline script if external JS fails -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Wait for all other scripts to finish
    setTimeout(function() {
        // Check if buttons have event handlers by adding a backup
        const addIncludedBtn = document.getElementById('addIncludedItem');
        if (addIncludedBtn && !addIncludedBtn._hasClickHandler) {
            console.log('Applying fallback click handler');
            addIncludedBtn.addEventListener('click', function() {
                const container = document.getElementById('includedItemsContainer');
                if (container) {
                    const newItem = document.createElement('div');
                    newItem.classList.add('input-group', 'mb-2');
                    newItem.innerHTML = `
                        <input type="text" class="form-control" name="included[]" placeholder="E.g. Airport pickup and drop-off" required>
                        <button type="button" class="btn btn-danger remove-item">
                            <i class="fi fi-rr-trash"></i>
                        </button>
                    `;
                    container.appendChild(newItem);

                    // Enable remove button functionality
                    newItem.querySelector('.remove-item').addEventListener('click', function() {
                        this.closest('.input-group').remove();
                    });
                }
            });
            addIncludedBtn._hasClickHandler = true;
        }

        // Check excluded button too
        const addExcludedBtn = document.getElementById('addExcludedItem');
        if (addExcludedBtn && !addExcludedBtn._hasClickHandler) {
            console.log('Applying fallback click handler for excluded');
            addExcludedBtn.addEventListener('click', function() {
                const container = document.getElementById('excludedItemsContainer');
                if (container) {
                    const newItem = document.createElement('div');
                    newItem.classList.add('input-group', 'mb-2');
                    newItem.innerHTML = `
                        <input type="text" class="form-control" name="excluded[]" placeholder="E.g. Personal expenses" required>
                        <button type="button" class="btn btn-danger remove-item">
                            <i class="fi fi-rr-trash"></i>
                        </button>
                    `;
                    container.appendChild(newItem);

                    // Enable remove button functionality
                    newItem.querySelector('.remove-item').addEventListener('click', function() {
                        this.closest('.input-group').remove();
                    });
                }
            });
            addExcludedBtn._hasClickHandler = true;
        }
    }, 500);
});
</script>
@endpush
