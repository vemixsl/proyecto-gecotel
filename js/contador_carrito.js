document.addEventListener("DOMContentLoaded", function() {
    // Variables globales
    const cartButtons = document.querySelectorAll('.add-to-cart');
    const cartCountElements = document.querySelectorAll('.cart-count');
    const cartButton = document.getElementById('cart-button');
    const cartModal = document.getElementById('cartModal') ? new bootstrap.Modal(document.getElementById('cartModal')) : null;
    
    // Bandera para evitar doble clic
    let isAddingToCart = false;

    // Inicializar carrito
    function getCart() {
        return JSON.parse(localStorage.getItem('gecotelCart')) || [];
    }
    
    function saveCart(cart) {
        localStorage.setItem('gecotelCart', JSON.stringify(cart));
    }
    
    function updateCartCount() {
        const cart = getCart();
        const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
        cartCountElements.forEach(element => {
            element.textContent = totalItems;
        });
    }
    
    function addToCart(product) {
        if (isAddingToCart) return;
        isAddingToCart = true;
        
        const cart = getCart();
        const existingItem = cart.find(item => item.id === product.id);
        
        if (existingItem) {
            existingItem.quantity += product.quantity;
        } else {
            cart.push(product);
        }
        
        saveCart(cart);
        updateCartCount();
        isAddingToCart = false;
    }

    function restoreButton(button, originalHTML, originalClasses) {
        button.innerHTML = originalHTML;
        button.className = originalClasses;
        button.disabled = false;
    }

    // Función para extraer correctamente el precio
    function extractPrice(priceElement) {
        if (!priceElement) return 0;
        
        // Eliminar símbolos de moneda y texto no numérico
        const priceText = priceElement.textContent
            .replace('$', '')
            .replace('/mes', '')
            .replace(',', '.')
            .trim();
            
        return parseFloat(priceText) || 0;
    }

    // Manejar botones de productos relacionados
    function setupRelatedProducts() {
        document.querySelectorAll('.product-card .add-to-cart').forEach(button => {
            button.addEventListener('click', function() {
                const productCard = this.closest('.product-card');
                const product = {
                    id: productCard.querySelector('a[href^="producto.html"]')?.href.split('id=')[1] || Date.now().toString(),
                    name: productCard.querySelector('.card-title')?.textContent || 'Producto sin nombre',
                    price: extractPrice(productCard.querySelector('.text-dark')),
                    image: productCard.querySelector('.card-img-top')?.src || '',
                    description: productCard.querySelector('.card-text')?.textContent || '',
                    quantity: 1
                };
                
                const originalHTML = this.innerHTML;
                const originalClasses = this.className;
                
                // Aplicar estilo "añadido"
                this.innerHTML = '<i class="fa fa-check"></i> Añadido';
                this.classList.remove('btn-outline-primary');
                this.classList.add('btn-success');
                this.disabled = true;
                
                // Forzar ancho fijo
                this.style.minWidth = this.offsetWidth + 'px';
                
                addToCart(product);
                
                setTimeout(() => {
                    restoreButton(this, originalHTML, originalClasses);
                    this.style.minWidth = '';
                }, 2000);
            });
        });
    }

    // Manejar botón principal del producto
    function setupMainProductButton() {
        const mainBtn = document.querySelector('.product-main-btn');
        if (mainBtn) {
            mainBtn.addEventListener('click', function() {
                const product = {
                    id: new URLSearchParams(window.location.search).get('id') || Date.now().toString(),
                    name: document.getElementById('product-title')?.textContent || 'Producto sin nombre',
                    price: extractPrice(document.getElementById('product-price')),
                    image: document.getElementById('mainImage')?.src || '',
                    quantity: parseInt(document.getElementById('product-qty')?.value) || 1
                };
                
                const originalHTML = this.innerHTML;
                const originalClasses = this.className;
                
                this.innerHTML = '<i class="fa fa-check"></i> Añadido';
                this.classList.remove('btn-primary');
                this.classList.add('btn-success');
                this.disabled = true;
                
                addToCart(product);
                
                setTimeout(() => {
                    this.innerHTML = originalHTML;
                    this.className = originalClasses;
                    this.disabled = false;
                }, 2000);
            });
        }
    }
    
    // Renderizar el carrito en el modal
    function renderCart() {
        if (!cartModal) return;
        
        const cart = getCart();
        const cartItems = document.getElementById('cart-items');
        const emptyCartMsg = document.getElementById('empty-cart-message');
        const cartContent = document.getElementById('cart-content');
        
        cartItems.innerHTML = '';
        
        if (cart.length === 0) {
            if (emptyCartMsg) emptyCartMsg.style.display = 'block';
            if (cartContent) cartContent.style.display = 'none';
            return;
        }
        
        if (emptyCartMsg) emptyCartMsg.style.display = 'none';
        if (cartContent) cartContent.style.display = 'block';
        
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
                            ${item.description ? `<small class="text-muted">${item.description}</small>` : ''}
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
        if (document.getElementById('subtotal')) {
            document.getElementById('subtotal').textContent = `$${subtotal.toFixed(2)}`;
        }
        if (document.getElementById('total')) {
            document.getElementById('total').textContent = `$${subtotal.toFixed(2)}`;
        }
        
        // Configurar eventos para los controles del carrito
        setupCartControls();
    }
    
    // Configurar controles del carrito (cantidad, eliminar)
    function setupCartControls() {
        // Aumentar cantidad
        document.querySelectorAll('.increase-qty').forEach(button => {
            button.addEventListener('click', function() {
                const index = parseInt(this.getAttribute('data-index'));
                const cart = getCart();
                cart[index].quantity += 1;
                saveCart(cart);
                renderCart();
                updateCartCount();
            });
        });
        
        // Disminuir cantidad
        document.querySelectorAll('.decrease-qty').forEach(button => {
            button.addEventListener('click', function() {
                const index = parseInt(this.getAttribute('data-index'));
                const cart = getCart();
                if (cart[index].quantity > 1) {
                    cart[index].quantity -= 1;
                    saveCart(cart);
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
                const cart = getCart();
                
                if (newQty > 0) {
                    cart[index].quantity = newQty;
                    saveCart(cart);
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
                const cart = getCart();
                cart.splice(index, 1);
                saveCart(cart);
                renderCart();
                updateCartCount();
                
                // Cerrar el modal si el carrito queda vacío
                if (cart.length === 0 && cartModal) {
                    setTimeout(() => {
                        cartModal.hide();
                    }, 500);
                }
            });
        });
    }
    
    // Configurar botón "Añadir al carrito" en la página de producto
    function setupProductPageButton() {
        if (document.querySelector('.add-to-cart.product-page')) {
            const button = document.querySelector('.add-to-cart.product-page');
            
            button.addEventListener('click', function() {
                const product = {
                    id: new URLSearchParams(window.location.search).get('id') || Date.now().toString(),
                    name: document.getElementById('product-title')?.textContent || 'Producto sin nombre',
                    price: extractPrice(document.getElementById('product-price')),
                    image: document.getElementById('mainImage')?.src || '',
                    quantity: parseInt(document.getElementById('product-qty')?.value) || 1
                };
                
                // Guardar estado original del botón
                const originalHTML = button.innerHTML;
                const originalClasses = button.className;
                
                // Deshabilitar botón temporalmente
                button.disabled = true;
                
                // Cambiar apariencia del botón
                button.innerHTML = '<i class="fa fa-check"></i> Añadido';
                button.classList.remove('btn-outline-primary', 'btn-primary');
                button.classList.add('btn-success');
                
                // Añadir producto al carrito
                addToCart(product);
                
                // Restaurar botón después de 2 segundos
                setTimeout(() => {
                    restoreButton(button, originalHTML, originalClasses);
                }, 2000);
            });
        }
    }
    
    // Configurar el botón del carrito para mostrar el modal
    function setupCartButton() {
        if (cartButton && cartModal) {
            cartButton.addEventListener('click', function(e) {
                e.preventDefault();
                renderCart();
                cartModal.show();
            });
        }
    }
    
    // Configurar botón para vaciar carrito
    function setupClearCartButton() {
        if (document.getElementById('clear-cart-btn')) {
            document.getElementById('clear-cart-btn').addEventListener('click', function() {
                if (confirm('¿Estás seguro de que quieres vaciar tu carrito?')) {
                    localStorage.removeItem('gecotelCart');
                    renderCart();
                    updateCartCount();
                    
                    if (cartModal) {
                        setTimeout(() => {
                            cartModal.hide();
                        }, 500);
                    }
                }
            });
        }
    }
    
    // Configurar botón de checkout
    function setupCheckoutButton() {
        if (document.getElementById('checkout-btn')) {
            document.getElementById('checkout-btn').addEventListener('click', function() {
                const cart = getCart();
                if (cart.length > 0) {
                    // Redirigir a la página de pago
                    window.location.href = 'pago.html';
                }
            });
        }
    }
    
    // Configurar botones para cerrar el modal
    function setupModalCloseButtons() {
        if (document.getElementById('continue-shopping-btn')) {
            document.getElementById('continue-shopping-btn').addEventListener('click', function() {
                if (cartModal) cartModal.hide();
            });
        }
        
        if (document.getElementById('close-cart-modal')) {
            document.getElementById('close-cart-modal').addEventListener('click', function() {
                if (cartModal) cartModal.hide();
            });
        }
    }
    
    // Inicializar todos los componentes
    function initialize() {
        setupRelatedProducts();
        setupMainProductButton();
        setupProductPageButton();
        updateCartCount();
        setupCartButton();
        setupClearCartButton();
        setupCheckoutButton();
        setupModalCloseButtons();
    }
    
    // Inicializar la aplicación
    initialize();
});