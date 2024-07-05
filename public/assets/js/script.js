document.addEventListener('DOMContentLoaded', () => {
    const addMoreButton = document.getElementById('add-more');
    const itemsContainer = document.getElementById('items-container');
    let itemCount = 1;

    addMoreButton.addEventListener('click', () => {
        const newItemDiv = document.createElement('div');
        newItemDiv.classList.add('item');

        const itemNameLabel = document.createElement('label');
        itemNameLabel.setAttribute('for', `item-name-${itemCount}`);
        itemNameLabel.textContent = 'Item Name:';
        newItemDiv.appendChild(itemNameLabel);

        const itemNameInput = document.createElement('input');
        itemNameInput.setAttribute('type', 'text');
        itemNameInput.setAttribute('id', `item-name-${itemCount}`);
        itemNameInput.setAttribute('name', `items[${itemCount}][name]`);
        itemNameInput.required = true;
        newItemDiv.appendChild(itemNameInput);

        const itemPriceLabel = document.createElement('label');
        itemPriceLabel.setAttribute('for', `item-price-${itemCount}`);
        itemPriceLabel.textContent = 'Item Price:';
        newItemDiv.appendChild(itemPriceLabel);

        const itemPriceInput = document.createElement('input');
        itemPriceInput.setAttribute('type', 'number');
        itemPriceInput.setAttribute('id', `item-price-${itemCount}`);
        itemPriceInput.setAttribute('name', `items[${itemCount}][price]`);
        itemPriceInput.required = true;
        newItemDiv.appendChild(itemPriceInput);

        itemsContainer.appendChild(newItemDiv);
        itemCount++;
    });
});
