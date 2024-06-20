document.addEventListener('DOMContentLoaded', function () {
    const signinForm = document.getElementById('signinForm');
    const signupForm = document.getElementById('signupForm');

    if (signinForm) {
        signinForm.addEventListener('submit', function(event) {
            //event.preventDefault(); 
            //window.location.href = 'index.html'; // Arahkan ke halaman home setelah login
        });
    }

    if (signupForm) {
        signupForm.addEventListener('submit', function(event) {
            //event.preventDefault(); // Prevent form from submitting normally
            // Here, you can add your AJAX call to register the user
            // window.location.href = 'profileForm.html';
        });
    }

//js forgotPass, changePass, profileForm.
});

// Scrollspy implementation
window.addEventListener('scroll', function() {
    let sections = document.querySelectorAll('section');
    let navLinks = document.querySelectorAll('.nav-link');
    
    sections.forEach(section => {
        let top = window.scrollY;
        let offset = section.offsetTop - 150;
        let height = section.offsetHeight;
        let id = section.getAttribute('id');

        if(top >= offset && top < offset + height) {
            navLinks.forEach(link => {
                link.classList.remove('active');
                document.querySelector('.nav-link[href*=' + id + ']').classList.add('active');
            });
        }
    });
});

// CART
document.addEventListener('DOMContentLoaded', () => {
    let cartItem = document.querySelector('.cart');
    let navbar = document.querySelector('.navbar'); // Assuming navbar element exists
    let searchForm = document.querySelector('.search-form'); // Assuming search-form element exists

    document.querySelector('#cart-btn').onclick = () => {
        cartItem.classList.toggle('active');
        if (navbar) {
            navbar.classList.remove('active');
        }
        if (searchForm) {
            searchForm.classList.remove('active');
        }
    };

    // FUNCTIONS FOR CART
    function ready() {
        // Remove Items from Cart
        let removeCartButtons = document.getElementsByClassName('cart-remove');
        for (let i = 0; i < removeCartButtons.length; i++) {
            let button = removeCartButtons[i];
            button.addEventListener('click', removeCartItem);
        }

        // When quantity changes
        let quantityInputs = document.getElementsByClassName("cart-quantity");
        for (let i = 0; i < quantityInputs.length; i++) {
            let input = quantityInputs[i];
            input.addEventListener("change", quantityChanged);
        }

        // Add to Cart
        let addCart = document.getElementsByClassName('add-cart');
        for (let i = 0; i < addCart.length; i++) {
            let button = addCart[i];
            button.addEventListener("click", addCartClicked);
        }

        // Buy Button Works
        document.getElementsByClassName("btn-buy")[0].addEventListener("click", buyButtonClicked);
    }

    // Function for "Buy Button Works"
    function buyButtonClicked() {
        let cartContent = document.getElementsByClassName("cart-content")[0];
        let cartBoxes = cartContent.getElementsByClassName("cart-box");

        if (cartBoxes.length === 0) {
            alert("Your cart is empty. Please add items to your cart before placing an order.");
            return;
        }
        let orderDetails = [];

        // Loop through all cart boxes to get details
        for (let i = 0; i < cartBoxes.length; i++) {
            let cartBox = cartBoxes[i];
            let title = cartBox.getElementsByClassName("cart-product-title")[0].innerText;
            let price = cartBox.getElementsByClassName("cart-price")[0].innerText;
            let quantity = cartBox.getElementsByClassName("cart-quantity")[0].value;
            let priceValue = parseFloat(price.replace('Rp. ', '').replace(/\./g, ""));
            let subtotalAmount = priceValue * quantity;
            orderDetails.push({ title: title, price: priceValue, quantity: quantity, subtotal_amount: subtotalAmount });
        }

        // Generate a unique order code (could use timestamp or a random string)
        let orderCode = Date.now();

        // Send data to server using AJAX
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "checkout.php", true);
        xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log(xhr.responseText);
                alert('Your order is placed! Thank you for buying and enjoy your coffee!');
                // Clear cart after sending data to server
                while (cartContent.hasChildNodes()) {
                    cartContent.removeChild(cartContent.firstChild);
                }
                updateTotal();
            }
        };
        xhr.send(JSON.stringify({ orderCode: orderCode, orderDetails: orderDetails }));
    }

    // Function for "Remove Items from Cart"
    function removeCartItem(event) {
        let buttonClicked = event.target;
        buttonClicked.parentElement.remove();
        updateTotal();
    }

    // Function for "When quantity changes"
    function quantityChanged(event) {
        let input = event.target;
        if (isNaN(input.value) || input.value <= 0) {
            input.value = 1;
        }
        updateTotal();
    }

    // Add to Cart
    function addCartClicked(event) {
        let button = event.target;
        let shopProducts = button.parentElement;
        let title = shopProducts.getElementsByClassName("product-title")[0].innerText;
        let price = shopProducts.getElementsByClassName("price")[0].innerText;
        let productImg = shopProducts.getElementsByClassName("product-img")[0].src;
        let productId = button.getAttribute("data-id");

        // Check stock
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "check_stock.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                let response = JSON.parse(xhr.responseText);
                if (response.stock > 0) {
                    addProductToCart(title, price, productImg, productId);
                    updateTotal();
                } else {
                    alert("This product is out of stock!");
                }
            }
        };
        xhr.send("id=" + productId);
    }

    function addProductToCart(title, price, productImg) {
        let cartShopBox = document.createElement("div");
        cartShopBox.classList.add("cart-box");
        let cartItems = document.getElementsByClassName("cart-content")[0];
        let cartItemsNames = cartItems.getElementsByClassName("cart-product-title");
        for (let i = 0; i < cartItemsNames.length; i++) {
            if (cartItemsNames[i].innerText === title) {
                alert("You have already added this item to cart!");
                return;
            }
        }
        let cartBoxContent = `
        <img src="${productImg}" alt="" class="cart-img">
        <div class="detail-box">
          <div class="cart-product-title">${title}</div>
          <div class="cart-price">${price}</div>
          <input type="number" value="1" min="1" class="cart-quantity">
        </div>
        <i class="fas fa-trash cart-remove"></i>`;
        cartShopBox.innerHTML = cartBoxContent;
        cartItems.append(cartShopBox);
        cartShopBox.getElementsByClassName("cart-remove")[0].addEventListener('click', removeCartItem);
        cartShopBox.getElementsByClassName("cart-quantity")[0].addEventListener('change', quantityChanged);
    }

    // Function to format number as currency (Rp. with thousand separators)
    function formatRupiah(number) {
        return 'Rp ' + number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    // Function to update total
    function updateTotal() {
        var cartContent = document.getElementsByClassName("cart-content")[0];
        var cartBoxes = cartContent.getElementsByClassName("cart-box");
        var total = 0;
        for (var i = 0; i < cartBoxes.length; i++) {
            var cartBox = cartBoxes[i];
            var priceElement = cartBox.getElementsByClassName("cart-price")[0];
            var quantityElement = cartBox.getElementsByClassName("cart-quantity")[0];
            var price = parseFloat(priceElement.innerText.replace("Rp ", "").replace(".", "").replace(",", "."));
            var quantity = quantityElement.value;
            total += price * quantity;
        }
        total = Math.round(total * 100) / 100;
        document.getElementsByClassName("total-price")[0].innerText = formatRupiah(total);
    }

    ready();
});
