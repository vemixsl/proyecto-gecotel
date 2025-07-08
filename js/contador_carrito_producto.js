// Funcionalidad del carrito compartida entre páginas
document.addEventListener("DOMContentLoaded", function() {
    // Función para actualizar el contador del carrito
    function updateCartCount() {
        const cart = JSON.parse(localStorage.getItem('gecotelCart')) || [];
        const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
        const cartCountElements = document.querySelectorAll('.cart-count');
        
        cartCountElements.forEach(element => {
            element.textContent = totalItems;
        });
        
        return cart; // Devolvemos el carrito por si se necesita
    }
    
    // Inicializar contador
    updateCartCount();
    
    // Función para añadir producto al carrito (reutilizable)
    function addToCart(product) {
        let cart = JSON.parse(localStorage.getItem('gecotelCart')) || [];
        const existingItem = cart.find(item => item.id === product.id);
        
        if (existingItem) {
            existingItem.quantity += product.quantity;
        } else {
            cart.push(product);
        }
        
        localStorage.setItem('gecotelCart', JSON.stringify(cart));
        updateCartCount();
    }
    
    // Configurar botones "Añadir al carrito" en la página de tienda
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function() {
            const productCard = this.closest('.product-card');
            const product = {
                id: productCard.querySelector('a[href^="producto.html"]')?.href.split('id=')[1] || Date.now().toString(),
                name: productCard.querySelector('.card-title').textContent,
                price: parseFloat(productCard.querySelector('.text-primary').textContent.replace('$', '')),
                image: productCard.querySelector('.card-img-top').src,
                quantity: 1
            };
            
            addToCart(product);
            
            // Feedback visual
            this.innerHTML = '<i class="fa fa-check"></i> Añadido';
            this.classList.remove('btn-outline-primary');
            this.classList.add('btn-success');
            
            setTimeout(() => {
                this.innerHTML = 'Añadir';
                this.classList.remove('btn-success');
                this.classList.add('btn-outline-primary');
            }, 2000);
        });
    });
    
    // Configurar botón "Añadir al carrito" en la página de producto
    if (document.querySelector('.add-to-cart.product-page')) {
        document.querySelector('.add-to-cart.product-page').addEventListener('click', function() {
            const product = {
                id: new URLSearchParams(window.location.search).get('id'),
                name: document.getElementById('product-title').textContent,
                price: parseFloat(document.getElementById('product-price').textContent.replace('$', '')),
                image: document.getElementById('mainImage').src,
                quantity: parseInt(document.getElementById('product-qty').value)
            };
            
            addToCart(product);
            
            // Feedback visual
            this.innerHTML = '<i class="fa fa-check"></i> Añadido';
            this.classList.remove('btn-primary');
            this.classList.add('btn-success');
            
            setTimeout(() => {
                this.innerHTML = 'Añadir al Carrito';
                this.classList.remove('btn-success');
                this.classList.add('btn-primary');
            }, 2000);
        });
    }
    
    // Configurar el modal del carrito
    const cartModal = new bootstrap.Modal(document.getElementById('cartModal'));
    document.getElementById('cart-button')?.addEventListener('click', function(e) {
        e.preventDefault();
        renderCart();
        cartModal.show();
    });
    
    // Función para renderizar el carrito en el modal
    function renderCart() {
        const cart = JSON.parse(localStorage.getItem('gecotelCart')) || [];
        const cartItems = document.getElementById('cart-items');
        const emptyCartMsg = document.getElementById('empty-cart-message');
        const cartContent = document.getElementById('cart-content');
        
        cartItems.innerHTML = '';
        
        if (cart.length === 0) {
            emptyCartMsg.style.display = 'block';
            cartContent.style.display = 'none';
            return;
        }
        
        emptyCartMsg.style.display = 'none';
        cartContent.style.display = 'block';
        
        let subtotal = 0;
        
        cart.forEach((item, index) => {
            const itemTotal = item.price * item.quantity;
            subtotal += itemTotal;
            
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>
                    <div class="d-flex align-items-center">
                        <img src="${item.image}" alt="${item.name}" class="img-thumbnail" style="width: 60px; height: 60px; object-fit: cover;">
                        <div class="ml-3">
                            <h6 class="mb-0">${item.name}</h6>
                        </div>
                    </div>
                </td>
                <td class="align-middle">$${item.price.toFixed(2)}</td>
                <td class="align-middle text-center">
                    <div class="input-group input-group-sm" style="width: 100px;">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary decrease-qty" data-index="${index}">-</button>
                        </div>
                        <input type="number" class="form-control text-center" value="${item.quantity}" min="1" data-index="${index}">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary increase-qty" data-index="${index}">+</button>
                        </div>
                    </div>
                </td>
                <td class="align-middle">$${itemTotal.toFixed(2)}</td>
                <td class="align-middle text-right">
                    <button class="btn btn-sm btn-outline-danger remove-item" data-index="${index}">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
            `;
            cartItems.appendChild(row);
        });
        
        // Actualizar totales
        document.getElementById('subtotal').textContent = `$${subtotal.toFixed(2)}`;
        document.getElementById('total').textContent = `$${subtotal.toFixed(2)}`;
        
        // Configurar eventos para los controles del carrito
        setupCartControls();
    }
    
    // Función para configurar los controles del carrito
    function setupCartControls() {
        // Aumentar cantidad
        document.querySelectorAll('.increase-qty').forEach(button => {
            button.addEventListener('click', function() {
                const index = parseInt(this.getAttribute('data-index'));
                let cart = JSON.parse(localStorage.getItem('gecotelCart')) || [];
                cart[index].quantity += 1;
                localStorage.setItem('gecotelCart', JSON.stringify(cart));
                renderCart();
                updateCartCount();
            });
        });
        
        // Disminuir cantidad
        document.querySelectorAll('.decrease-qty').forEach(button => {
            button.addEventListener('click', function() {
                const index = parseInt(this.getAttribute('data-index'));
                let cart = JSON.parse(localStorage.getItem('gecotelCart')) || [];
                if (cart[index].quantity > 1) {
                    cart[index].quantity -= 1;
                    localStorage.setItem('gecotelCart', JSON.stringify(cart));
                    renderCart();
                    updateCartCount();
                }
            });
        });
        
        // Cambio manual de cantidad
        document.querySelectorAll('#cart-items input[type="number"]').forEach(input => {
            input.addEventListener('change', function() {
                const index = parseInt(this.getAttribute('data-index'));
                const newQty = parseInt(this.value);
                let cart = JSON.parse(localStorage.getItem('gecotelCart')) || [];
                
                if (newQty > 0) {
                    cart[index].quantity = newQty;
                    localStorage.setItem('gecotelCart', JSON.stringify(cart));
                    renderCart();
                    updateCartCount();
                } else {
                    this.value = cart[index].quantity;
                }
            });
        });
        
        // Eliminar producto
        document.querySelectorAll('.remove-item').forEach(button => {
            button.addEventListener('click', function() {
                const index = parseInt(this.getAttribute('data-index'));
                let cart = JSON.parse(localStorage.getItem('gecotelCart')) || [];
                cart.splice(index, 1);
                localStorage.setItem('gecotelCart', JSON.stringify(cart));
                renderCart();
                updateCartCount();
            });
        });
    }
    
    // Vaciar carrito
    document.getElementById('clear-cart-btn')?.addEventListener('click', function() {
        if (confirm('¿Estás seguro de que quieres vaciar tu carrito?')) {
            localStorage.removeItem('gecotelCart');
            renderCart();
            updateCartCount();
        }
    });
});