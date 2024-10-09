// Tăng giảm số lượng sản phẩm
document.getElementById("tang").addEventListener("click", function(event) {
    event.preventDefault();
    let quantityInput = document.getElementById("soluong_input");
    let currentValue = parseInt(quantityInput.value);
    quantityInput.value = currentValue + 1;
});

document.getElementById("giam").addEventListener("click", function(event) {
    event.preventDefault();
    let quantityInput = document.getElementById("soluong_input");
    let currentValue = parseInt(quantityInput.value);
    
    if (currentValue > 1) {
        quantityInput.value = currentValue - 1;
    }
});

// Tabs navigation
$('#tabs-nav li:first-child').addClass('active');
$('.tab-content').hide();
$('.tab-content:first').show();

$('#tabs-nav li').click(function(){
  $('#tabs-nav li').removeClass('active');
  $(this).addClass('active');
  $('.tab-content').hide();
  
  var activeTab = $(this).find('a').attr('href');
  $(activeTab).fadeIn();
  return false;
});

// Điều khiển form tìm kiếm
const searchBtn = document.getElementById('searchBtn');
const searchInput = document.getElementById('search-box');
const searchForm = document.getElementById('searchForm');

// Khi nhấn nút tìm kiếm
searchBtn.addEventListener('click', function() {
    if (!searchInput.classList.contains('active')) {
        // Thêm class 'active' để hiển thị input tìm kiếm
        searchInput.classList.add('active');
        searchInput.focus(); // Đặt con trỏ vào input
    } else if (searchInput.value.trim() !== '') {
        // Nếu input có giá trị, cho phép submit form
        searchForm.submit();
    } else {
        // Nếu input rỗng, hiện thông báo lỗi hoặc ngăn submit
        alert("Vui lòng nhập từ khóa để tìm kiếm");
        searchInput.focus();
    }
});

// Ngăn submit form nếu người dùng nhấn Enter khi input trống
searchForm.addEventListener('submit', function(event) {
    if (searchInput.value.trim() === '') {
        event.preventDefault(); // Ngăn việc submit nếu input trống
        alert("Vui lòng nhập từ khóa để tìm kiếm");
        searchInput.focus();
    }
});
