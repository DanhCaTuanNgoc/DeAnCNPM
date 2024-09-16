function toggleContent() {
    var content = document.getElementById('content');
    var toggleButton = document.getElementById('toggleButton');
    if (content.style.display === 'none' || content.style.display === '') {
        content.style.display = 'block';
        toggleButton.innerHTML = 'Ẩn bớt';
    } else {
        content.style.display = 'none';
        toggleButton.innerHTML = 'Xem thêm';
    }
}
document.addEventListener('DOMContentLoaded', function () {
    var sImages = document.querySelectorAll('.S_img');
    var lImage = document.getElementById('l_img');
    var btnLeft = document.getElementById('btn_left');
    var btnRight = document.getElementById('btn_right');
    var sImgContainer = document.getElementById('s_img_container');
    var currentIndex = 0;

    // Gắn sự kiện mouseover cho mỗi ảnh nhỏ
    sImages.forEach(function (sImg) {
        sImg.addEventListener('mouseover', function () {
            lImage.src = this.src;
        });
    });

    // Xử lý sự kiện click nút '>'
    btnRight.addEventListener('click', function () {
        if (currentIndex < sImages.length - 4) { // Đảm bảo không vượt quá số ảnh
            currentIndex++;
            updateVisibleImages();
        }
    });

    // Xử lý sự kiện click nút '<'
    btnLeft.addEventListener('click', function () {
        if (currentIndex > 0) {
            currentIndex--;
            updateVisibleImages();
        }
    });

    // Hàm cập nhật ảnh hiển thị
    function updateVisibleImages() {
        // Ẩn tất cả ảnh
        sImages.forEach(function (sImg) {
            sImg.style.display = 'none';
        });

        // Hiển thị 4 ảnh tiếp theo bắt đầu từ currentIndex
        for (var i = currentIndex; i < currentIndex + 4; i++) {
            if (sImages[i]) {
                sImages[i].style.display = 'inline-block';
            }
        }
    }

    // Khởi tạo trạng thái hiển thị ảnh
    updateVisibleImages();
});