

// const btn_add_cart= document.querySelectorAll('.add_cart')

// console.log(btn_add_cart)

// btn_add_cart.forEach((btn,index) => {

//     btn.addEventListener('click',(e)=>{
        
//         const btnItem = e.target
//         const product = btnItem.parentElement.parentElement.parentElement;
//         const productImg = product.querySelector('img').src
//         const productTitle = product.querySelector('img').title

//         const productName = product.querySelector('.container__select-box-list-item-describe').innerText;
//         const productprepare = product.querySelector('.container__select-box-list-item-prepare').innerText;
        
//         addCart( productImg, productName, productprepare, productTitle )


//     })
    
// })



//them vao gio hang
// function addCart( productImg, productName, productPrepare, productTitle ) {

//     //thong bao trung san pham
//     const cartItems = document.querySelectorAll('.header__cart-list-item')
//     for(let x = 0; x < cartItems.length; x++) {
//         const name = document.querySelectorAll('.header__cart-list-item-text-details');
//         if(name[x].innerHTML == productName) {
//             swal("", "Sản phẩm đã có trong giỏ hàng!","success")
//             return
//         }
//     }

//     //them san pham
//     const divCart = document.createElement('div');
//     divCart.classList.add('header__cart-list-item');
//     const scrollBar_cart = document.querySelector('.scroll_bar')
//     scrollBar_cart.append(divCart)
//     divCart.innerHTML = '<a href="#" class="header__cart-list-item-img"><img  src="'+productImg +'" title="'+productTitle+'"></a><div class="header__cart-list-item-text"><p class="header__cart-list-item-text-details hover">'+ productName+'</p><div class="flex"><span class="header__cart-list-item-text-price">'+productPrepare+'</span><span class="header__cart-list-item-text-unit"><u>đ</u></span></div><div class ="header__cart-list-select"><input class="header__cart-list-select-input" type="number" value="1" min="1"></div></div><div class="header__cart-list-item-iconremove"> <i class=" deleteProduct fa-regular fa-trash-can "></i></div>'
    
//     //
//     const div_cart_list = document.createElement('div')
//     div_cart_list.classList.add('cart_list')
//     const cart_table= document.querySelector('.cart-table')
//     cart_table.append(div_cart_list )
//     div_cart_list.innerHTML ='<div class="cart_list_item  cart_list_item-img" style="width: 24%;"><img src="'+productImg+'" alt="" title="'+productTitle+'"></div><div class="cart_list_item cart_list_item-name" style="width: 36%;"><p><a class="hover" href="">'+ productName+'</a></p></div><div class="cart_list_item  text_bold" style="width: 17%;"><span class="cart_list_item-price">'+productPrepare+'</span><span class="header__cart-list-item-text-unit" style="color: #333;"><u>đ</u></sapn></div><div class="cart_list_item" style="width: 18%;"><input class="cart_list_item-input" type="number" value="1" min="1"></div><div class="cart_list_item" style="width: 5%;"><i class="delete_cart fa-solid fa-trash"></i></div>'
    
//     cartTotals()
//     cart_resule()
//     deleteCart()
//     deleteCart_toTal()
    
// }

// function deleteCart(){
//     const cartItems = document.querySelectorAll('.header__cart-list-item')
//     for(let x = 0; x < cartItems.length; x++) {
//         const deleteProduct = cartItems[x].querySelector('.deleteProduct')

//         deleteProduct.addEventListener('click',(e)=>{
//             e.target.parentElement.parentElement.remove();
//             cartTotals()

//         })
//     }
    
// }


// //tinh tien

// function cartTotals() {

//     const cartItems = document.querySelectorAll('.header__cart-list-item')
//     let productResult = 0
//     for(var i=0; i < cartItems.length; i++) {

//         const cartInput  = cartItems[i].querySelector('input').value;
//         const productPrice = cartItems[i].querySelector('.header__cart-list-item-text-price').innerHTML;

//         //tinh tong tien
//         priceItem = cartInput * productPrice * 1000;
//         productResult = productResult + priceItem;

//         //in ra tong so hang da dk them vao gio
//         const totalProduct = document.querySelector('.totalProduct')
//         totalProduct.innerHTML = cartItems.length
//     }


//     const totalResult = document.querySelector('.header__cart-list-prepare-right')
//     totalResult.innerHTML = productResult.toLocaleString('de-DE')

//     inputChanged()
// }

// function inputChanged(){

//     const cartItems = document.querySelectorAll('.header__cart-list-item')
//     for(var i=0; i<cartItems.length; i++) {

//         const inputValue  = cartItems[i].querySelector('.header__cart-list-select-input')
//         inputValue.addEventListener('change',(e)=>{
//             cartTotals()
//         })
//     }
// }



// //trang gio hang

// function cart_resule() {
//     const cart_list  = document.querySelectorAll('.cart_list')

//     let cart_total = 0
//     for(var i=0; i < cart_list.length; i++) {
//         const cartInput  = cart_list[i].querySelector('input').value;
//         const productPrice = cart_list[i].querySelector('.cart_list_item-price').innerHTML;
//         //tinh tong tien
//         priceItem = cartInput * productPrice * 1000; 
//         cart_total = cart_total + priceItem;
        
//     }
//     const tota_cart = document.querySelector('.cart_list_item-total')
//     tota_cart.innerHTML = cart_total.toLocaleString('de-DE')
//     inputPage_Cart()
// }


// function deleteCart_toTal(){
//     const scrollBar_cart = document.querySelector('.scroll_bar')
//     const cartItems = document.querySelectorAll('.header__cart-list-item')

//     console.log(cartItems)
//     const cart_list  = document.querySelectorAll('.cart_list')
//     for(var i = 0; i < cart_list.length; i++) {

//         const delete_cart = cart_list[i].querySelector('.delete_cart')
//         delete_cart.addEventListener('click',(e)=>{
//             e.target.parentElement.parentElement.remove()
//             cart_resule()
//         })
//     }

// }



// function inputPage_Cart(){
//     const cart_list  = document.querySelectorAll('.cart_list')
//     for(var i=0; i<cart_list.length; i++){
//         const cart_list_input = cart_list[i].querySelector('.cart_list_item-input');
//         cart_list_input.addEventListener('change',(e)=>{
//             cart_resule()
//         })
//     }
// }


