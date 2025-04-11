document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("form-login");

    form.addEventListener("submit", (e) => {
        e.preventDefault(); // Ngăn submit mặc định

        const name = document.getElementById("name");
        const mssv = document.getElementById("mssv");
        const email = document.getElementById("email");

        // Tạo đối tượng lỗi để lưu thông báo lỗi
        const errors = {
            name: "",
            mssv: "",
            email: ""
        };

        // Reset lỗi cũ
        document.getElementById("error-name").innerText = "";
        document.getElementById("error-mssv").innerText = "";
        document.getElementById("error-email").innerText = "";

        // Validate từng trường
        if (name.value.trim() === "") {
            errors.name = "Tên không được để trống!";
        }

        if (mssv.value.trim() === "") {
            errors.mssv = "MSSV không được để trống!";
        }

        if (email.value.trim() === "") {
            errors.email = "Email không được để trống!";
        } else {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email.value)) {
                errors.email = "Email không hợp lệ!";
            }
        }

        // Kiểm tra và hiển thị lỗi
        let hasError = false; // Tránh focus bị đè bởi nhiều trường lỗi.

        if (errors.name) {
            document.getElementById("error-name").innerText = errors.name;
            if (!hasError) {
                name.focus();
                hasError = true;
            }
        }

        if (errors.mssv) {
            document.getElementById("error-mssv").innerText = errors.mssv;
            if (!hasError) {
                mssv.focus();
                hasError = true;
            }
        }

        if (errors.email) {
            document.getElementById("error-email").innerText = errors.email;
            if (!hasError) {
                email.focus();
                hasError = true;
            }
        }

        // Nếu không có lỗi thì submit
        if (!hasError) {
            form.submit();
        }
    });
});