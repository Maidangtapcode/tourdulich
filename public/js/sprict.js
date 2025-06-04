document.addEventListener('DOMContentLoaded', function() {
    const icon = document.getElementById('icon');  // Biểu tượng mở popup
    const popup = document.getElementById('popup');  // Popup

    // Hàm toggle popup (hiện/ẩn popup)
    function togglePopup() {
        const isPopupVisible = popup.classList.contains('visible');
        
        if (isPopupVisible) {
            popup.classList.remove('visible');
            popup.style.display = 'none';
        } else {
            const iconRect = icon.getBoundingClientRect();  // Lấy vị trí của icon
            const iconX = iconRect.left;
            const iconY = iconRect.bottom;
            
            let popupLeft = iconX - 220;
            let popupTop = iconY + 10;
            popup.style.left = `${popupLeft}px`;
            popup.style.top = `${popupTop}px`;
            popup.style.display = 'block';
            popup.classList.add('visible');
        }
    }

    // Lắng nghe sự kiện click vào icon để mở/đóng popup
    if (icon) {
        icon.addEventListener('click', function(event) {
            event.stopPropagation();
            togglePopup();
        });
    }

    // Lắng nghe sự kiện click vào bất kỳ đâu ngoài popup để ẩn popup
    document.addEventListener('click', function(event) {
        if (popup && !popup.contains(event.target) && event.target !== icon) {
            popup.classList.remove('visible');
            popup.style.display = 'none';
        }
    });

    // Lắng nghe sự kiện click vào nút "Xem hồ sơ" để ẩn popup và mở modal
    const showHosoBtn = document.getElementById('showhoso');
    if (showHosoBtn) {
        showHosoBtn.addEventListener('click', function(event) {
            // Ẩn popup
            popup.classList.remove('visible');
            popup.style.display = 'none';
            
            // Mở modal
            const modal = new bootstrap.Modal(document.getElementById('exampleModal'));
            modal.show();
        });
    }
});



    // Lắng nghe sự kiện click vào phần tử đăng ký/đăng nhập (dành cho người chưa đăng nhập)
    const fg_logins = document.querySelector('.fg-login');
    const lg_us_navbar = document.querySelector('.lg-us-navbar');

    if (fg_logins) {
        fg_logins.addEventListener('click', function(event) {
            event.stopPropagation(); // Ngăn chặn sự lan truyền sự kiện click đến các phần tử cha

            const windowWidth = window.innerWidth;
            if (lg_us_navbar.style.display === 'none') {
                lg_us_navbar.style.display = 'block';
                if (windowWidth > 790) {
                    lg_us_navbar.style.top = `${fg_logins.offsetTop + fg_logins.offsetHeight}px`;
                    lg_us_navbar.style.left = `${fg_logins.offsetLeft - 150}px`;
                } else {
                    // Nếu màn hình nhỏ hơn hoặc bằng 768px, hiển thị trên cùng và căn giữa
                    lg_us_navbar.style.top = `${fg_logins.offsetTop + fg_logins.offsetHeight}px`;      
                    lg_us_navbar.style.left = '40%';         
                    lg_us_navbar.style.transform = 'translate(-35%, 0%)';
                }
            } else {
                lg_us_navbar.style.display = 'none';
            }
            lg_us_navbar.classList.toggle('visible');
        });
    }
     // Khi modal đóng, đảm bảo lớp backdrop không còn trên màn hình
     const exampleModal = document.getElementById('exampleModal');
     if (exampleModal) {
         exampleModal.addEventListener('hidden.bs.modal', function() {
             // Xóa lớp backdrop nếu nó còn tồn tại
             const backdrop = document.querySelector('.modal-backdrop');
             if (backdrop) {
                 backdrop.remove();
             }
         });
     }

    // Lắng nghe sự kiện click bên ngoài để đóng navbar đăng ký/đăng nhập
    document.addEventListener('click', function(event) {
        if (!lg_us_navbar.contains(event.target) && event.target !== fg_logins) {
            lg_us_navbar.classList.remove('visible');
            lg_us_navbar.style.display = 'none';
        }
    });


let numlitrongnuoc = null;
function numhoteltrongnuoc(cardNumber) {
    var sohotelsale = document.getElementsByClassName('hotel-sale');
    // Ẩn tất cả các phần tử
    for (var i = 0; i < sohotelsale.length; i++) {
        sohotelsale[i].style.display = 'none';   
    }
    if (numlitrongnuoc) {
        numlitrongnuoc.style.backgroundColor = '';
        numlitrongnuoc.style.color = '';
    }
    numlitrongnuoc = document.getElementById('hoteltrongnuocnum' + cardNumber);
    var hoteltrongnuocnum1 = document.getElementById('hoteltrongnuocnum1');
    if (numlitrongnuoc != hoteltrongnuocnum1) {
        numlitrongnuoc.style.backgroundColor = '#5fc7ff';
        numlitrongnuoc.style.color = '#fff';
        hoteltrongnuocnum1.style.backgroundColor='';
        hoteltrongnuocnum1.style.color='';
    }else{
       hoteltrongnuocnum1.style.backgroundColor = '#5fc7ff';
       hoteltrongnuocnum1.style.color = '#fff';
    }
    
    //Hiển thị phần tử tương ứng với cardNumber
    var hotel_sale = document.getElementById('hotelsale' + cardNumber);
    if (hotel_sale.id != "hotelsale1") {
        hotel_sale.style.display = 'block';
    } 
    else{
        hotel_sale.style.display="flex";
    }
 }
 let numlingoainuoc = null;
 let numhotelngoainuoc = 0; // Khởi tạo giá trị ban đầu cho biến
 
 // Hàm sẽ được gọi khi trang tải xong
 window.onload = function() {
     // Ẩn tất cả các phần tử với class 'hotelsalenn'
     var sohotelsale1 = document.getElementsByClassName('hotelsalenn');
     for (var i = 0; i < sohotelsale1.length; i++) {
         sohotelsale1[i].style.display = 'none';
     }
 
     // Chỉ hiển thị phần tử với id="hotel_sale1" khi mới tải trang
     var hotel_sale1 = document.getElementById('hotel_sale1');
     if (hotel_sale1) {
         hotel_sale1.style.display = 'block';
     }
 };
 
 function selectHotel(cardNumber) {
     // Ẩn tất cả các phần tử với class 'hotelsalenn'
     var sohotelsale1 = document.getElementsByClassName('hotelsalenn');
     for (var i = 0; i < sohotelsale1.length; i++) {
         sohotelsale1[i].style.display = 'none';   
     }
     
     // Thay đổi màu sắc cho các mục được chọn
     if (numlingoainuoc) {
         numlingoainuoc.style.backgroundColor = '';
         numlingoainuoc.style.color = '';
     }
     
     numlingoainuoc = document.getElementById('hotelngoainuocnum' + cardNumber);
     var hotelngoainuocnum1 = document.getElementById('hotelngoainuocnum1');
     if (numlingoainuoc != hotelngoainuocnum1) {
         numlingoainuoc.style.backgroundColor = '#5fc7ff';
         numlingoainuoc.style.color = '#fff';
         hotelngoainuocnum1.style.backgroundColor = '';
         hotelngoainuocnum1.style.color = '';
     } else {
         hotelngoainuocnum1.style.backgroundColor = '#5fc7ff';
         hotelngoainuocnum1.style.color = '#fff';
     }
     
     // Hiển thị phần tử tương ứng với cardNumber
     var hotel_sale = document.getElementById('hotel_sale' + cardNumber);
     if (hotel_sale) {
         hotel_sale.style.display = 'block';
     }
 }
 