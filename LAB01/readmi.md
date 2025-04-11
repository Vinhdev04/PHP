### ========== Series[PHP] =========

## **PHP**: `Hypertext PreProcessor là một ngôn ngữ aã nguôn mở đựơc thực thi trên máy chủ`

<br>
**Một tâp tin PHP có phần mở rộng là gì?**:

- `*.php`
- `html,css,js,php,...`

---

## **PHP vs HTML ?**:

- `html khi người dùng gửi yêu cầu lên trình duyệt -> server sẻ tiến hành xử lý và trả về dữ liệu tương ứng dạng mã html`
- `php khi nhận yêu cầu server sẻ tiến hành tạo trang web từ mã nguồn php sang html sau đó -> chuyển qua cho trình duyệt -> tới người dùng. `
- `Vì trình duyệt ko thể đọc hiểu mã php mà chỉ đọc được các mã html,..`

---

## **Server làm gì đối với trang web PHP?**:

- `Server chỉ quan tâm đến mã nguồn PHP, nó sẻ chuyển mã php -> html => gửi lại cho người dùng`
- `Trang web PHP được server phát sinh chỉ gửi đến 1 client duy nhất` -` Server PHP phải > server HTML vì phải chuyển từ mã php->html`

---

## **Tại sao nên sử dụng PHP để lập trình web?**:

- `Chức năng: Tạo ra website động,  thao tác với file trên Server,nhận và gửi Cookie,update database,hạn chế người dùng truy cập website,mã hóa...`
- ` Ưu điểm: Thực thi tốt trên hệ điều hành,các máy chủ phổ biến hiện nay,kết hợp dễ dàng với các hệ quản trị csdl,...`

---

## **Có thể tạo ra một webserver ảo tại máy tính cá nhân ko ?**:

- `XAMPP -> một webserver ảo tại máy tính người dùng hỗ trợ: Apache,PHP,Mysql,..`

---

## **Tool**:

- `Vscode,visual studio,...`
- `zend`

---

## **Syntax**:

- `<?php ?> -> thẻ mở và đong`
- `echo -> dùng để in ra màn hình`
- `Có thể code php vào bất ký vị trí nào trong file index`

---

## **Run php**:

- `Run XAMMP`
- `tạo folder bên trong XAMPP`
- `tạo file index.php`

---

## **Comment Syntax**:

- `// -> Comment trên một dòng`
- `# -> Comment trên một dòng`
- `/**/ -> Comment trên nhiều dòng`

---

## **Variable**:

- `sử dụng $ để khai báo biến`
- `$name= Vinh; $nam = 1980`
- `Không bắt đầu là sô`
- `Một biến bắt đầu bằng $dấu, theo sau là tên của biến`
- `Tên biến phải bắt đầu bằng một chữ cái hoặc ký tự gạch dưới`
- `Tên biến không thể bắt đầu bằng số`
- `Tên biến chỉ có thể chứa các ký tự chữ và số và dấu gạch dưới (Az, 0-9 và \_)`
- `Tên biến phân biệt chữ hoa chữ thường ( $agevà $AGElà hai biến khác nhau)`
- `String`
- `Integer`
- `Float (floating point numbers - also called double)`
- `Boolean`
- `Array`
- `Object`
- `NULL`
- `Resource`

---

## **Hăng sô**:

- `Syntax: define (name,value,boolean) -> true/false -> ko phân biêt hoa thường => phiên bản cu`
- `EX: define ("limit","100",true) `
- `Syntax: `
- `Vì PHP giờ mặc định coi hằng số là phân biệt chữ hoa chữ thường, nếu bạn muốn truy cập hằng số không phân biệt chữ hoa chữ thường, hãy dùng strtolower() hoặc strtoupper()`
- `EX: define("MY_CONSTANT", "value")`

---

## **Scope Variable**:

- `local`
- `global -> Một biến được khai báo bên ngoài một hàm có phạm vi toàn cầu và chỉ có thể được truy cập bên ngoài một hàm`
- `static -> Thông thường, khi một hàm hoàn thành/thực thi, tất cả các biến của nó sẽ bị xóa. Tuy nhiên, đôi khi chúng ta muốn một biến cục bộ KHÔNG bị xóa. Chúng ta cần nó cho một công việc khác.Để thực hiện việc này, hãy sử dụng statictừ khóa khi bạn khai báo biến lần đầu tiên`
- `PHP cũng lưu trữ tất cả các biến toàn cục trong một mảng được gọi là . Mảng này chứa tên của biến. Mảng này cũng có thể truy cập được từ bên trong các hàm và có thể được sử dụng để cập nhật trực tiếp các biến toàn cục.$GLOBALS[index]index`
- `EX: global $x, $x`
- `EX: static: $x`

---

## **Phân biệt '' và ""**:

- `"variable" -> biên`
- `'text' -> chuỗi`

---

## **Lệnh echo và print**:

- `Chuỗi được bao quanh bởi dấu ngoặc kép, nhưng có sự khác biệt giữa dấu ngoặc đơn và dấu ngoặc kép trong PHP.`

- `Khi sử dụng dấu ngoặc kép, các biến có thể được chèn vào chuỗi như trong ví dụ trên.`

- `Khi sử dụng dấu ngoặc đơn, các biến phải được chèn bằng .toán tử, như sau:`
- `EX: `<br>
  `$txt1 = "Learn PHP";`<br>
  `$txt2 = "W3Schools.com";`<br>

  `print '<h2>' . $txt1 . '</h2>';`<br>
  `print '<p>Study PHP at ' . $txt2 . '</p>';`

- `Câu lệnh này printcó thể được sử dụng có hoặc không có dấu ngoặc đơn: printhoặc print().`

## So sánh echo và print trong PHP:

| Đặc điểm             | `echo`                                                | `print`                                  |
| -------------------- | ----------------------------------------------------- | ---------------------------------------- |
| **Chức năng**        | Xuất dữ liệu ra màn hình                              | Xuất dữ liệu ra màn hình                 |
| **Giá trị trả về**   | Không trả về giá trị (không thể dùng trong biểu thức) | Trả về `1` (có thể dùng trong biểu thức) |
| **Tốc độ**           | Nhanh hơn một chút                                    | Chậm hơn một chút                        |
| **Số lượng tham số** | Hỗ trợ nhiều tham số (phân tách bằng dấu phẩy)        | Chỉ nhận một tham số                     |
| **Cách sử dụng**     | `echo "Hello";` hoặc `echo "Hello", " World";`        | `print "Hello";`                         |

### Ví dụ echo và print trong PHP:

- `$test = echo "Hello"; // ❌ Lỗi vì echo không trả về giá trị`
- `$test = print "Hello"; echo $test; // Kết quả: Hello1 (do print trả về 1)`
- `print "Hello World!"; // Hợp lệ `
- `// print "Hello", " World!"; // ❌ Lỗi vì print chỉ nhận 1 tham số`

---

**Kiểu dữ liệu**:
