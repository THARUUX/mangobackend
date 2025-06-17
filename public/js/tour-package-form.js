/**
 * Tour Package Form JavaScript
 * Handles all functionality for the tour package creation/editing form
 */

// Current day counter for itinerary
var dayCounter = 1;

document.addEventListener('DOMContentLoaded', function() {
    // Count existing itinerary days to set the initial counter value correctly
    const itineraryContainer = document.getElementById('itineraryContainer');
    if (itineraryContainer) {
        const existingDays = itineraryContainer.querySelectorAll('.itinerary-item');
        if (existingDays && existingDays.length > 0) {
            dayCounter = existingDays.length;
        }
    }
    // Initialize TinyMCE
    if (typeof tinymce !== 'undefined') {
        // Main description editor
        tinymce.init({
            selector: '.tinymce',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            height: 400
        });

        // Initialize all itinerary description editors
        document.querySelectorAll('.itinerary-description').forEach(function(textarea) {
            if (textarea.id) {
                tinymce.init({
                    selector: '#' + textarea.id,
                    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                    height: 200
                });
            }
        });
    }

    // Image preview functionality
    const imageInput = document.getElementById('image');
    if (imageInput) {
        imageInput.onchange = function(evt) {
            const [file] = this.files;
            if (file) {
                const preview = document.getElementById('imagePreview');
                preview.src = URL.createObjectURL(file);
                preview.style.display = 'block';
            }
        };
    }

    // ===== INCLUDED ITEMS =====
    const addIncludedItemBtn = document.getElementById('addIncludedItem');
    if (addIncludedItemBtn) {
        addIncludedItemBtn.addEventListener('click', function() {
            addItem('includedItemsContainer', 'included[]', 'E.g. Airport pickup and drop-off', '#f0fff4');
        });
    }

    // ===== EXCLUDED ITEMS =====
    const addExcludedItemBtn = document.getElementById('addExcludedItem');
    if (addExcludedItemBtn) {
        addExcludedItemBtn.addEventListener('click', function() {
            addItem('excludedItemsContainer', 'excluded[]', 'E.g. Personal expenses', '#fff0f0');
        });
    }

    // Initialize all remove buttons for initial items
    document.querySelectorAll('.remove-item').forEach(button => {
        button.addEventListener('click', function() {
            removeItem(this);
        });
    });

    // Initialize item counters
    const includedContainer = document.getElementById('includedItemsContainer');
    const excludedContainer = document.getElementById('excludedItemsContainer');

    if (includedContainer) {
        updateItemCounter(includedContainer, 'included');
    }

    if (excludedContainer) {
        updateItemCounter(excludedContainer, 'excluded');
    }

    // ===== ITINERARY DAYS =====
    const addItineraryDayBtn = document.getElementById('addItineraryDay');
    if (addItineraryDayBtn) {
        addItineraryDayBtn.addEventListener('click', addItineraryDay);
    }

    // Set up event delegation for removing itinerary days
    document.addEventListener('click', function(e) {
        if (e.target.closest('.remove-itinerary')) {
            removeItineraryDay(e.target.closest('.remove-itinerary'));
        }
    });
});

// This is moved to the top of the file

/**
 * Add a new item to a container (for included/excluded items)
 */
function addItem(containerId, inputName, placeholder, highlightColor) {
    const container = document.getElementById(containerId);
    if (!container) return;

    const newItem = document.createElement('div');
    newItem.classList.add('input-group', 'mb-2');
    newItem.innerHTML = `
        <input type="text" class="form-control" name="${inputName}" placeholder="${placeholder}" required>
        <button type="button" class="btn btn-danger remove-item">
            <i class="fi fi-rr-trash"></i>
        </button>
    `;

    // Add with a highlight effect
    newItem.style.backgroundColor = highlightColor;
    container.appendChild(newItem);

    // Scroll to the new item
    newItem.scrollIntoView({ behavior: 'smooth', block: 'nearest' });

    // Focus on the new input field
    const inputField = newItem.querySelector('input');
    inputField.focus();

    // Fade out the highlight effect
    setTimeout(() => {
        newItem.style.transition = 'background-color 1s ease';
        newItem.style.backgroundColor = '';
    }, 300);

    // Enable all remove buttons if there's more than one item
    if (container.children.length > 1) {
        const buttons = container.querySelectorAll('.remove-item');
        buttons.forEach(btn => btn.disabled = false);
    }

    // Add specific event listener to this new remove button
    const removeButton = newItem.querySelector('.remove-item');
    removeButton.addEventListener('click', function() {
        removeItem(this);
    });

    // Update the item counter
    const itemType = containerId.includes('included') ? 'included' : 'excluded';
    updateItemCounter(container, itemType);
}

/**
 * Remove an item from a container
 */
function removeItem(button) {
    const itemGroup = button.closest('.input-group');
    const container = itemGroup.parentElement;

    // Add a visual effect before removing
    itemGroup.style.transition = 'opacity 0.3s, transform 0.3s';
    itemGroup.style.opacity = '0';
    itemGroup.style.transform = 'translateX(10px)';

    // Remove after the animation completes
    setTimeout(() => {
        itemGroup.remove();

        // If only one item remains, disable its remove button
        if (container.children.length === 1) {
            const lastButton = container.querySelector('.remove-item');
            if (lastButton) lastButton.disabled = true;
        }

        // Update the counter
        const itemType = container.id.includes('included') ? 'included' : 'excluded';
        updateItemCounter(container, itemType);
    }, 300);
}

/**
 * Update the item counter display
 */
function updateItemCounter(container, itemType) {
    const count = container.children.length;
    const countId = `${itemType}Count`;

    // Remove old count if exists
    const oldCount = document.getElementById(countId);
    if (oldCount) oldCount.remove();

    // Add new count notification
    const countElement = document.createElement('small');
    countElement.id = countId;
    countElement.className = 'text-muted d-block mt-1';
    countElement.textContent = `${count} item${count !== 1 ? 's' : ''} in list`;
    container.parentNode.insertBefore(countElement, container.nextSibling);
}

/**
 * Add a new itinerary day
 */
function addItineraryDay() {
    dayCounter++;

    const container = document.getElementById('itineraryContainer');
    if (!container) return;

    const newDay = document.createElement('div');
    newDay.classList.add('itinerary-item', 'card', 'mb-4');

    // Create a unique ID for the new textarea
    const textareaId = `itinerary-description-${dayCounter}-${Date.now()}`;

    newDay.innerHTML = `
        <div class="card-header bg-light d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Day ${dayCounter}</h5>
            <button type="button" class="btn btn-sm btn-danger remove-itinerary">
                <i class="fi fi-rr-trash"></i> Remove
            </button>
        </div>
        <div class="card-body">
            <div class="row">
                <input type="hidden" name="itinerary[${dayCounter-1}][day]" value="${dayCounter}" class="day-number">

                <div class="col-md-6 mb-3">
                    <label class="form-label">Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="itinerary[${dayCounter-1}][title]" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Location <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="itinerary[${dayCounter-1}][location]" required>
                </div>

                <div class="col-12 mb-3">
                    <label class="form-label">Description <span class="text-danger">*</span></label>
                    <textarea id="${textareaId}" class="form-control" name="itinerary[${dayCounter-1}][description]" rows="4" required></textarea>
                </div>

                <div class="col-12">
                    <label class="form-label">Image (Optional)</label>
                    <input type="file" class="form-control itinerary-image" name="itinerary[${dayCounter-1}][image]" accept="image/*">
                </div>
            </div>
        </div>
    `;

    // Add with a highlight effect
    newDay.style.backgroundColor = '#f0fff4';
    container.appendChild(newDay);

    // Scroll to the new day
    newDay.scrollIntoView({ behavior: 'smooth', block: 'start' });

    // Fade out the highlight effect
    setTimeout(() => {
        newDay.style.transition = 'background-color 1s ease';
        newDay.style.backgroundColor = '';
    }, 500);

    // Enable all remove buttons if there's more than one day
    if (container.children.length > 1) {
        const buttons = container.querySelectorAll('.remove-itinerary');
        buttons.forEach(btn => btn.disabled = false);
    }

    // Initialize TinyMCE for the new textarea using the unique ID
    if (typeof tinymce !== 'undefined') {
        // Add a delay to ensure the element is in the DOM before initialization
        setTimeout(() => {
            try {
                tinymce.init({
                    selector: `#${textareaId}`,
                    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                    height: 200
                });

                console.log('TinyMCE initialized for', textareaId);
            } catch (e) {
                console.error('Error initializing TinyMCE:', e);
            }
        }, 200);
    }
}

/**
 * Remove an itinerary day
 */
function removeItineraryDay(button) {
    const container = document.getElementById('itineraryContainer');
    if (!container) return;

    const itemToRemove = button.closest('.itinerary-item');

    // Find any TinyMCE instances in this item and remove them properly
    itemToRemove.querySelectorAll('textarea').forEach(textarea => {
        if (textarea.id && typeof tinymce !== 'undefined' && tinymce.get(textarea.id)) {
            tinymce.get(textarea.id).remove();
        }
    });

    // Add a visual effect before removing
    itemToRemove.style.transition = 'opacity 0.3s, transform 0.3s';
    itemToRemove.style.opacity = '0';
    itemToRemove.style.transform = 'translateY(-10px)';

    // Remove after animation completes
    setTimeout(() => {
        itemToRemove.remove();

        // If only one day remains, disable its remove button
        if (container.children.length === 1) {
            const lastButton = container.querySelector('.remove-itinerary');
            if (lastButton) lastButton.disabled = true;
        }

        // Renumber the days
        const days = container.querySelectorAll('.itinerary-item');
        days.forEach((day, index) => {
            const dayNumber = index + 1;
            day.querySelector('h5').textContent = `Day ${dayNumber}`;
            day.querySelector('.day-number').value = dayNumber;

            // Update the name attributes to maintain the correct array indexing
            day.querySelectorAll('input, textarea').forEach(input => {
                if (input.name) {
                    input.name = input.name.replace(/itinerary\[\d+\]/, `itinerary[${index}]`);
                }
            });
        });

        // Update the day counter
        dayCounter = days.length;
    }, 300);
}
