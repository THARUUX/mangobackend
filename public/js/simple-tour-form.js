/**
 * Simplified Tour Package Form handling
 * Focus on making the "Add Item" buttons work
 */

// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    console.log('Simplified JS loaded');

    // Set up the included items button
    setupItemButton('addIncludedItem', 'includedItemsContainer', 'included[]', 'Airport pickup and drop-off');

    // Set up the excluded items button
    setupItemButton('addExcludedItem', 'excludedItemsContainer', 'excluded[]', 'Personal expenses');
});

/**
 * Set up an "Add Item" button with all necessary event handlers
 */
function setupItemButton(buttonId, containerId, inputName, placeholder) {
    const button = document.getElementById(buttonId);
    const container = document.getElementById(containerId);

    if (!button || !container) {
        console.error(`Button ${buttonId} or container ${containerId} not found`);
        return;
    }

    console.log(`Setting up button ${buttonId} for container ${containerId}`);

    // Add click handler
    button.addEventListener('click', function() {
        console.log(`Button ${buttonId} clicked`);
        addNewItem(container, inputName, placeholder);
    });

    // Also set up existing remove buttons
    setupRemoveButtons(container);
}

/**
 * Add a new item to a container
 */
function addNewItem(container, inputName, placeholder) {
    // Create the new item
    const newItem = document.createElement('div');
    newItem.classList.add('input-group', 'mb-2');

    // Set the HTML content
    newItem.innerHTML = `
        <input type="text" class="form-control" name="${inputName}" placeholder="${placeholder}" required>
        <button type="button" class="btn btn-danger remove-item">
            <i class="fi fi-rr-trash"></i>
        </button>
    `;

    // Add highlight effect
    newItem.style.backgroundColor = '#f0fff4';

    // Add to the container
    container.appendChild(newItem);

    // Focus on the new input
    newItem.querySelector('input').focus();

    // Fade out highlight
    setTimeout(() => {
        newItem.style.transition = 'background-color 0.5s';
        newItem.style.backgroundColor = '';
    }, 300);

    // Set up the remove button
    setupRemoveButton(newItem.querySelector('.remove-item'));

    // Enable all remove buttons if there's more than one item
    if (container.children.length > 1) {
        container.querySelectorAll('.remove-item').forEach(btn => {
            btn.disabled = false;
        });
    }
}

/**
 * Set up remove button handlers for all buttons in a container
 */
function setupRemoveButtons(container) {
    container.querySelectorAll('.remove-item').forEach(setupRemoveButton);
}

/**
 * Set up a single remove button
 */
function setupRemoveButton(button) {
    if (!button) return;

    button.addEventListener('click', function() {
        const itemGroup = this.closest('.input-group');
        const container = itemGroup.parentElement;

        // Animate and remove
        itemGroup.style.opacity = '0';
        itemGroup.style.transform = 'translateX(10px)';
        itemGroup.style.transition = 'all 0.3s';

        setTimeout(() => {
            itemGroup.remove();

            // Disable the last remove button if only one item left
            if (container.children.length === 1) {
                const lastButton = container.querySelector('.remove-item');
                if (lastButton) lastButton.disabled = true;
            }
        }, 300);
    });
}
