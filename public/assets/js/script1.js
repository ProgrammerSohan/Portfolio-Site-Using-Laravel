document.addEventListener('DOMContentLoaded', () => {
    const itemForm = document.getElementById('item-form');
    const itemList = document.getElementById('item-list');

    itemForm.addEventListener('submit', (event) => {
        event.preventDefault(); // Prevent form from submitting traditionally

        // Get form data
        const formData = new FormData(itemForm);
        const itemName = formData.get('name');
        const itemPrice = formData.get('price');

        // Send data to the server using Fetch API
        fetch(itemForm.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                'Accept': 'application/json',
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Create a new list item element
                const li = document.createElement('li');
                li.textContent = `${itemName} - $${itemPrice}`;

                // Add the new item to the list
                itemList.appendChild(li);

                // Clear the input fields
                itemForm.reset();
            } else {
                alert('Error adding item.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error adding item.');
        });
    });
});
