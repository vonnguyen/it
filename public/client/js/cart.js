window.addEventListener('load',function(){
    let icon = document.querySelector('.icon-cart i');
    let cart = document.querySelector('.main-cart');
    let iconClose = document.querySelector('.close')
    let iconNumber = document.querySelector('.icon-number');
    let iconBag = document.querySelectorAll('.bag-ctn3');
    let modalCart = document.querySelector('.about-cart');
    icon.addEventListener('click',function(e){
        cart.classList.add('active');
    })
    iconClose.addEventListener('click',function(e){
        cart.classList.remove('active');
    })
    cart.addEventListener('click',function(e){
        if(!e.target.matches('.icon-cart i') && !modalCart.contains(e.target)){
            console.log(e.target);
            cart.classList.remove('active');
        }
        
    })

    let containerCart = document.querySelector('.container-cart');
    containerCart.addEventListener('click',function(e){
        if(e.target.matches('.close-item')){
            // console.log();
            e.stopPropagation();
            let item = e.target.parentElement;
            item.remove();
            let number =   containerCart.querySelectorAll('.product-cart').length;
            iconNumber.textContent = number;
        }
    })

    /**
     * 
     */
    function renderItemCart(item){
        let template= `
        <div class="product-cart">
        <span class="close-item">x</span>
        <div class="item-img-cart">
            <img src="${item.image}" alt="">
        </div>
        <div class="detais-cart">
            <h6>${item.name}</h6>
            <p>7 / yellow / leather</p>
            <span>${item.gia}</span>
            <div class="dt-sc-cart">
                <span class="up-down">-</span>
                <input type="text" value="${item.number}">
                <span class="up-down">+</span>
            </div>
        </div>

    </div>
        `;
        containerCart.innerHTML += template;
    }
    console.log(containerCart)
    iconBag.forEach(item=>{
        item.addEventListener('click', function(e) {
            e.preventDefault();
            // console.log(e.target.parentElement.parentElement.parentElement.parentElement.parentElement);
            let item = e.target.parentElement.parentElement.parentElement.parentElement.parentElement;
            let srcImage = item.querySelector('.groups-img img:first-child').src;
            let name = item.querySelector('.name-shoe-ctn3 h1 a').textContent;
            let money = item.querySelector('.name-shoe-ctn3 .cost-ctn3 h2').textContent;
            let numberProduct = 1;
            let id = item.querySelector('.bag-ctn3').dataset.id;//lấy id sản phẩm
            let url = item.querySelector('.bag-ctn3').dataset.url;//lấy id sản phẩm
             
            // console.log(money);
                // iconBag.
                let itemCart = {
                    id,
                    numberProduct
                };
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    contentType: "application/json",
                    url: url,
                    data: JSON.stringify(itemCart),
                    dataType: 'json',
                    success: function (data) {
            
                        console.log(data)
                        // let dataNew = JSON.parse(data)
                        let number = 0;
                        containerCart.innerHTML  = "";

                        data.forEach(item=>{
                            number+=+item.number;
                            renderItemCart(item);
                        })
                        iconNumber.textContent = number;
                    },
                    error: function (e) {
                        console.log('loi')
                       console.log(e)
            
                    }
                });
                // console.log(itemCart);
            //     renderItemCart(itemCart);
            //     icon.click();
            //   let number =   
            //   iconNumber.textContent = number;
        })

    })


})