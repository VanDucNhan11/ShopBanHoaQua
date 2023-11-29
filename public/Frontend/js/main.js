// //--------------menutop-----------------

// // khi nguoi dung quan trang thi thuc thi cau lenh
// window.onscroll = function() {
//     myFunction()
// };
// //lay ra id
// var header = document.getElementById('my_header');
// // nhaan vi tri den cua thanh dieu huong
// var sticky = header.offsetTop;

// function myFunction(){
//     if(window.pageYOffset > sticky){
//         //them lop dinh vao tieu de khi ban cuon
//         header.classList.add('sticky');
//     }
//     else{
//         //xoa lop dinh khi ban roi khoi vi tri cuon
//         header.classList.remove('sticky');
//     }

// }

// //--------------slide-baner-----------------------
// window.addEventListener('load', function(){
//     const slider = document.querySelector('.slider');
//     const btn_slider_right = document.querySelector('.btn-slider-right');
//     const btn_slider_left = document.querySelector('.btn-slider-left');
//     const slider_item_imgs = document.querySelectorAll('.slider-item-img');
//     const slider_item_width = slider_item_imgs[0].offsetWidth;
//     const slidersLength = slider_item_imgs.length;
//     let positionX = 0;
//     let index = 0;
//     btn_slider_right.addEventListener('click', () =>{
//         handleSlider(1);
//     });
//     btn_slider_left.addEventListener('click', () =>{
//         handleSlider(-1);

//     });


//     function handleSlider(direction){
//         if(direction === 1){
//             if(index >= slidersLength -1){
//                 index = slidersLength -1;
//                 return;
//             }
//             positionX = positionX - slider_item_width;
//             slider.style = `transform : translateX(${positionX}px)`
//             index++;
//         }
//         else if(direction === -1){
//             if(index <= 0){
//                 index = 0;
                
//                 return;
//             }
//             positionX = positionX + slider_item_width;
//             slider.style = `transform : translateX(${positionX}px)`
//             index--;

//         }
//     }

// });

// const $ = document.querySelector.bind(document);
// const $$ = document.querySelectorAll.bind(document);
// //tab1 chuyen trang
// const tabs= $$('.container__select-title-list-item');
// const item_panes= $$('.tab_pane');

// tabs.forEach((tab,index) =>{
//     const pane = item_panes[index];

//     tab.onclick =function(){
//         // click vao menu

//         $('.container__select-title-list-item.active').classList.remove('active');
//         $('.tab_pane.active').classList.remove('active');

//         //hien thi noi dung item box
//         this.classList.add('active');
//         pane.classList.add('active');
//     }
// })

// //tab2 chuyen trang
// const tabs1= $$('.container__select-title-list-item1');
// const item_panes1= $$('.tab_pane1');

// tabs1.forEach((tab1,index1) =>{
//     const pane1 = item_panes1[index1];

//     tab1.onclick =function(){
//         // click vao menu
//         $('.container__select-title-list-item1.active1').classList.remove('active1');
//         $('.tab_pane1.active1').classList.remove('active1');
        
//         //hien thi noi dung item box
//         this.classList.add('active1');
//         pane1.classList.add('active1');
//     }
// })
// //tab3 chuyen trang
// const tabs2= $$('.container__select-title-list-item2');
// const item_panes2= $$('.tab_pane2');

// tabs2.forEach((tab2,index2) =>{
//     const pane2 = item_panes2[index2];

//     tab2.onclick =function(){
//         // click vao menu
//         $('.container__select-title-list-item2.active2').classList.remove('active2');
//         $('.tab_pane2.active2').classList.remove('active2');
        
//         //hien thi noi dung item box
//         this.classList.add('active2');
//         pane2.classList.add('active2');
//     }
// })

// // trang con cua trang san pham 
// const btn_page_sanpham = $$(".btn_page_sanpham");
// const next_page_child_sanpham = $$(".next_page_child_sanpham");

// btn_page_sanpham.forEach((tab,index)=>{
//     const next_page =next_page_child_sanpham[index];

//     tab.onclick = function(){
//         $('.next_page_child_sanpham.action').classList.remove('action')
//         $('.btn_page_sanpham.action').classList.remove('action')

//         this.classList.add('action')
//         next_page.classList.add('action')
//     }
// })

// // tab trang chi tiet san pham
// const btn_tab_link = $$('.btn_tab-link');
// const tab_link_content = $$('.tab_link-content');
// btn_tab_link.forEach((tab, index)=>{
//     const tablink = tab_link_content[index]
//     tab.onclick = function(){

//         $('.btn_tab-link.current').classList.remove('current');
//         $('.tab_link-content.current').classList.remove('current');

//         this.classList.add('current');
//         tablink.classList.add('current');

//     }
// })




// //------------------menu ngang---------------------------
// const menu_ngang= $$('.menu_ngang');
// const tab_page = $$('.tab_page');

// menu_ngang.forEach((tab, index) => {
//     const page = tab_page[index];

//     tab.onclick = function() {
//         $('.tab_page.next_page').classList.remove('next_page');
//         $('.menu_ngang.next_page').classList.remove('next_page');

//         this.classList.add('next_page');
//         page.classList.add('next_page');


            
//     }

// })

// //----------------xem chi tiet san pham-----------------


// const btn_detail_product= $$('.detail_product')
// const detail = $('.product_description')

// btn_detail_product.forEach((btn,index) => {

//     btn.addEventListener('click',()=>{

//         $('.tab_page.next_page').classList.remove('next_page');
//         $('.menu_ngang.next_page').classList.remove('next_page');

//         detail.classList.add('action');
        
//     })
    
// })

// //----------xem trang gio hang--------------------------

// const page_cart = $('.page_cart')//btn
// const page_cart_product = $('.page_cart_product')

// page_cart.addEventListener('click', () =>{

//     $('.tab_page.next_page').classList.remove('next_page');
//     $('.menu_ngang.next_page').classList.remove('next_page');
//     page_cart_product.classList.add('action')

//     }
// )
// //----------cem trang thanh Toán--------------------------
// //btn
// const btn_cart_pay = document.querySelector('.btn_cart_pay button')
// console.log(btn_cart_pay)
// const page_product_pay = document.querySelector('.product_pay')

// btn_cart_pay.addEventListener('click',()=>{
//     $('.page_cart_product.action').classList.remove('action');

//     page_product_pay.classList.add('action')

   
// })



// //----------cuon trang len vi tri dau--------------------------

// const scrollTopButton=$('#scroll_top-button');
// const onScroll = (e) => {
//     const scrollPosition = e.target.scrollingElement.scrollTop;
//     scrollTopButton.classList.toggle('visible', scrollPosition > 0);

// };
// const scrollToTop = () => {
//     window.scrollTo({
//         top: 0, behavior:'smooth' 
//     });
// };
// document.addEventListener('scroll', onScroll);


// //------------xem chi tiet anh --------------

// const bigImg = document.querySelector('.description_contain-left-content_img img');
// const smalImg = document.querySelectorAll('.content_detail-img-item img');

// smalImg.forEach((img, index)=>{

//     img.addEventListener('click',()=>{

//         bigImg.src = img.src    
//     })
// })


// //-------------------

// const btn_continue = document.querySelector('.btn_continue button')

// btn_continue.addEventListener('click',()=>{

//     swal("", "Đặt hàng thành công !", "success")
// })



// function rangeSlider(value){

//     document.querySelector('.product_price_slider_max').innerHTML = value;

// }
