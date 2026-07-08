let cart = JSON.parse(localStorage.getItem('cart')) || [];

function addToCart(id, name, price) {
    let item = cart.find(i => i.id === id);
    if (item) {
        item.qnty++;
    } else {
        cart.push({ id, name, price, qnty: 1 });
    }
    localStorage.setItem('cart', JSON.stringify(cart));
    renderCart();
    document.getElementById('cart-sidebar').classList.add('active');
}

function renderCart() {
    let container = document.getElementById('cart-items');
    let totalEl = document.getElementById('cart-total-price');
    container.innerHTML = '';
    let total = 0;

    cart.forEach((item, index) => {
        total += item.price * item.qnty;
        container.innerHTML += `
            <div class="cart-item" style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                <div>
                    <strong>${item.name}</strong><br>
                    Rp ${item.price.toLocaleString()} x ${item.qnty}
                </div>
                <div>
                    <button onclick="updateQty(${index}, -1)">-</button>
                    <button onclick="removeItem(${index})" style="color: red;">x</button>
                </div>
            </div>`;
    });
    totalEl.innerText = 'Rp ' + total.toLocaleString();
}

function updateQty(index, change) {
    cart[index].qnty += change;
    
    if (cart[index].qnty <= 0) {
        cart.splice(index, 1);
    }
    
    localStorage.setItem('cart', JSON.stringify(cart));
    renderCart();
}

function removeItem(index) {
    cart.splice(index, 1);
    localStorage.setItem('cart', JSON.stringify(cart));
    renderCart();
}

function closeCart() {
    document.getElementById('cart-sidebar').classList.remove('active');
}