/**
 * Debug script for tour package form
 * Used to identify issues with button functionality
 */

console.log('Debug script loaded!');

// Function to manually initialize the form buttons
function initializeFormButtons() {
    console.log('Initializing form buttons...');

    // Check if buttons exist
    const addIncludedBtn = document.getElementById('addIncludedItem');
    console.log('Add Included Button exists:', !!addIncludedBtn);

    const addExcludedBtn = document.getElementById('addExcludedItem');
    console.log('Add Excluded Button exists:', !!addExcludedBtn);

    // Check if containers exist
    const includedContainer = document.getElementById('includedItemsContainer');
    console.log('Included Container exists:', !!includedContainer);

    const excludedContainer = document.getElementById('excludedItemsContainer');
    console.log('Excluded Container exists:', !!excludedContainer);

    // Add direct click event handlers
    if (addIncludedBtn) {
        console.log('Adding direct click handler to included button');
        addIncludedBtn.addEventListener('click', function() {
            console.log('Included button clicked!');
            addTestItem('includedItemsContainer', 'included[]', 'Test included item');
        });
    }

    if (addExcludedBtn) {
        console.log('Adding direct click handler to excluded button');
        addExcludedBtn.addEventListener('click', function() {
            console.log('Excluded button clicked!');
            addTestItem('excludedItemsContainer', 'excluded[]', 'Test excluded item');
        });
    }
}

// Simple function to add items with minimal complexity
function addTestItem(containerId, inputName, placeholderText) {
    console.log(`Adding test item to ${containerId}`);
    const container = document.getElementById(containerId);

    if (!container) {
        console.error(`Container ${containerId} not found!`);
        return;
    }

    const newItem = document.createElement('div');
    newItem.classList.add('input-group', 'mb-2');
    newItem.innerHTML = `
        <input type="text" class="form-control" name="${inputName}" placeholder="${placeholderText}" value="${placeholderText}" required>
        <button type="button" class="btn btn-danger remove-item">
            <i class="fi fi-rr-trash"></i>
        </button>
    `;

    console.log('Adding new item to container');
    container.appendChild(newItem);
    console.log('Item added successfully!');

    // Add remove handler
    const removeBtn = newItem.querySelector('.remove-item');
    if (removeBtn) {
        removeBtn.addEventListener('click', function() {
            console.log('Remove button clicked');
            newItem.remove();
        });
    }
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM loaded, initializing debug script');
    // Give a short delay to ensure the page is fully loaded
    setTimeout(initializeFormButtons, 500);
});

// Also try initializing directly in case DOMContentLoaded already fired
console.log('Trying direct initialization as well');
setTimeout(initializeFormButtons, 1000);
