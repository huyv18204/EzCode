var showButton = document.getElementById("showButton");
var categoryList = document.getElementById("categoryList");

var showCourse = document.getElementById("showCourse");
var courseList = document.getElementById("courseList");

// Hàm ẩn tất cả các danh sách
function hideAllLists() {
    categoryList.style.display = "none";
    courseList.style.display = "none";
}

// Hiển thị hoặc ẩn menu con khi click vào nút
showButton.addEventListener("click", function (event) {
    hideAllLists(); // Ẩn tất cả các danh sách trước khi hiển thị danh sách mới
    if (categoryList.style.display === "none" || categoryList.style.display === "") {
        categoryList.style.display = "block";
    } else {
        categoryList.style.display = "none";
    }
    event.stopPropagation();
});

// Hiển thị hoặc ẩn menu con khi click vào nút
showCourse.addEventListener("click", function (event) {
    hideAllLists(); // Ẩn tất cả các danh sách trước khi hiển thị danh sách mới
    if (courseList.style.display === "none" || courseList.style.display === "") {
        courseList.style.display = "block";
    } else {
        courseList.style.display = "none";
    }
    event.stopPropagation();
});

// Ẩn tất cả các danh sách khi click ra ngoài
window.addEventListener("click", function () {
    hideAllLists();
});
