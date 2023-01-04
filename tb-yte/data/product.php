<?php

//danh mục
/*
 * id => id
 * tên danh mục => cat_title
 */
$list_product_cat = array(
    1 => array(
        'id' => 1,
        'cat_title' => "máy đo huyết áp"
    ),
    2 => array(
        'id' => 2,
        'cat_title' => "máy đo đường huyết"
    ),
    3 => array(
        'id' => 3,
        'cat_title' => "Nhiệt kế điện tử"
    )
);

// danh sách sản phẩm
/*
 * id => id
 * id danh mục => cat_id
 * tên sản phẩm => product_name
 * giá => price
 * mã sản phẩm => code
 * mô tả => desc
 * ảnh sản phẩm => thumb => url
 * chi tiết sản phẩm => product_show
 */
$list_product = array(
    1 => array(
        'id' => 1,
        'cat_id' => 1,
        'product_name' => "Máy đo huyết áp Sinocare BA-801",
        'price' => 699000,
        'code' => 'dat#1',
        'desc' => 'Máy đo huyết áp Sinoheart BA-801
        Thương hiệu Sinocare nổi tiếng với các dòng máy đo sức khỏe đang làm mưa làm gió trên thị trường với mẫu máy đo đường huyết Sinocare Safe Accu giá rẻ phổ thông mà chất lượng và độ chính xác cao.
         ',
        'thumb' => 'assets/img/product/1_product1.jpg',
        'product_show' => "- Máy đo huyết áp Sinoheart BA-801 là dòng sản phẩm bán chạy trên toàn cầu. Với ông nghệ hoàn toàn vượt trội và đặc biệt là công nghệ hoàn toàn mới so với tất cả các dòng máy đo huyết áp trên thị trường.
        - Tính năng:90 bộ lưu trữ (2 người), IHB rối loạn nhịp tim phát hiện, bảng phân loại huyết áp của WHO. Intelligense tạo áp suất
        Máy Đo Huyết Áp Bắp Tay Sinocare Sinoheart BA-801 là dòng sản phẩm bán chạy trên toàn cầu.
Với công nghệ hoàn toàn vượt trội và đặc biệt là công nghệ hoàn toàn mới so với tất cả các dòng máy đo huyết áp trên thị trường.
Tính năng: 90 bộ lưu trữ (2 người), IHB rối loạn nhịp tim phát hiện, bảng phân loại huyết áp của WHO. Intellisense tạo áp suất.
BA-801 thể hiện đầy đủ 3 chỉ số: huyết áp tối đa, tối thiểu, nhịp tim.
Thao tác đo đơn giản, độ chính xác cao, màn hình to, dễ nhìn thích hợp cho người cao tuổi.
Là sản phẩm đo trên bắp tay nên phù hợp với mọi đối tượng đo ngay cả người bị tiểu đường lẫn xơ vữa động mạch.
"
    ),
    2 => array(
        'id' => 2,
        'cat_id' => 1,
        'product_name' => "Máy đo huyết áp bắp tay Omron Hem 7121",
        'price' => 1049000,
        'code' => 'dat#2',
        'desc' => 'Máy đo huyết áp bắp tay Hem 7121 của Omron Nhật Bản là sản phẩm thiết thực cho bạn và gia đình thân yêu. Omron – Thương hiệu máy đo huyết áp duy nhất được Hội Tim Mạch Việt Nam khuyên dùng bởi tính chính xác cao, tiện dụng và cách sử dụng dễ dàng với các thao tác đơn giản. Chăm sóc sức khỏe toàn diện bằng cách đo huyết áp hàng ngày!',
        'thumb' => 'assets/img/product/1_product2.jpg',
        'product_show' => "Tính năng nổi bật của máy đo huyết áp Omron Hem 7121:

        Sử dụng công nghệ intellisense cảm biến tuyệt vời cho kết quả đo nhanh và độ chính xác cao
        
        Bộ nhớ lưu được 30 kết quả đo tiện cho việc xem lại kết quả đo
        
        Máy gọn, nhỏ, dễ sử dụng với giá thành hợp lý
        
        Thông số kỹ thuật của máy đo huyết áp Hem 7121:
        
        Phương pháp đo: Đo dao động.
        
        Giới hạn đo: Huyết áp: 0 tới 299 mm Hg; Nhịp tim: 40 tới 180 nhịp/phút.
        
        Độ chính xác: Huyết áp: ±3 mm Hg; Nhịp tim: ±5%.
        
        Tự động bơm và xả khí.
        
        Pin: 4 pin AA hoặc bộ đổi điện Omron( mua thêm)
        
        Trọng lượng: 250g (không gồm pin).
        
        Kích thước máy : Khoảng 103 (rộng) x 80 (cao) x 129 (dài)
        
        Phụ kiện kèm theo: Vòng bít cỡ trung bình; Hướng dẫn sử dụng; Bộ pin."
    ),
    3=> array(
        'id' => 3,
        'cat_id' => 1,
        'product_name' => "Máy Đo Huyết Áp Tự Động Omron HEM-7156",
        'price' => 1350000,
        'code' => 'dat#3',
        'desc' => 'Độ chính xác là một trong những yêu cầu quan trọng nhất trong theo dõi huyết áp. Với vòng bít IntelliWrap ™ 360° chính xác, HEM-7156 của OMRON giúp bạn có được các kết quả đo chính xác một cách dễ dàng, bất kể vòng bít được quấn ở nhà như thế nào. Giúp bạn có được kết quả đo chính xác như ở phòng khám của bác sĩ!',
        'thumb' => 'assets/img/product/1_product3.jpg',
        'product_show' => "Tự động áp dụng đúng mức áp suất để đo nhanh, chính xác và thoải mái hơn

        IntelliSense & thương mại; Máy bơm hơi vòng bít đến mức lý tưởng với mỗi lần sử dụng. Người dùng không cần điều chỉnh để chọn mức bơm hơi. Điều này đặc biệt thuận tiện cho người sử dụng bị tăng huyết áp và cho những người bị rối loạn nhịp tim hoặc rối loạn tim, vì huyết áp của họ có khả năng lên xuống thất thường.
        
        Công nghệ IntelliSense tiên tiến
        
        Tự động hoàn toàn
        Mức độ bơm hơi được thiết kế phù hợp cho từng cá nhân để đạt được sự thoải mái tối đa
        Van xả xả hơi nhanh cho quá trình đo nhanh chóng"
    ),
    4=> array(
        'id' => 4,
        'cat_id' => 2,
        'product_name' => "Máy đo đường huyết Sinocare",
        'price' => 399000,
        'code' => 'dat#4',
        'desc' => 'MÁY ĐO ĐƯỜNG HUYẾT SINOCARE
        Thương hiệu: Sinocare
        Xuất xứ: TQ
        Bảo hành máy: Vĩnh viễn',
        'thumb' => 'assets/img/product/2_product1.jpg',
        'product_show' => "Tính năng nổi bật:
        – Sinocare là sản phẩm cải tiến mới không sử dụng mã code que thử. Mang đến sự tiện ích và dễ sử dụng cho người dùng.
        – Sinocare được sản xuất dựa trên công nghệ tiên tiến của Đức
        Cho kết quả nhanh, độ chính xác cao, tin cậy.
        – Máy Sinocare sử dụng que thử tự động lấy lượng máu rất nhỏ 0.6µl (microliter) ở vùng lấy máu tự chọn ngón tay. Máy đo đường huyết Sinocare có thể đo trong phạm vi từ 20 – 630mg/dl (1.1-35mmol/l).
        – Kết quả sẽ hiển thị rõ trên màn hình LCD trong 10 giây.
        – Tự báo lỗi khi lượng máu không đủ
        – Với bộ nhớ lưu trữ được 480 lần đo.
        – Chỉ dùng 1 pin 3V duy nhất.
        – Thân máy chắc chắn, nhẹ và dễ sử dụng.
        – Thiết kế nhỏ gọn, dễ sử dụng, phù hợp để mang theo khi đi xa, tiện lợi mọi lúc, mọi nơi."
    ),
    5 => array(
        'id' => 5,
        'cat_id' => 2,
        'product_name' => "Máy đo đường huyết Accu Chek Active",
        'price' => 949000,
        'code' => 'dat#5',
        'desc' => '- Máy đo đường huyết Accu Check Active thế hệ mới (2017) không cần mã CODE (thẻ mã hóa). Tiện lợi hơn cho người sử dụng.

        - Kim lấy máu rất dễ sử dụng, có thể điều chỉnh được độ nông sâu của kim cho phù hợp với tay của từng người sử dụng.',
        'thumb' => 'assets/img/product/2_product2.jpg',
        'product_show' => " TÍNH NĂNG NỔI BẬT

        Đơn giản để kiểm tra đường huyết hàng ngày.
        
        Cho kết quả chính xác:
        
         Cho kết quả nhanh và chính xác trong vòng 5 giây. Máy Accu-Chek Active đáp ứng đúng tiêu chuẩn ISO 15197:2013*.
        
        Có thể kiểm chứng kết quả đo bằng việc so sánh với dãy màu trên thân lọ que.
        Dễ sử dụng: 
        
        Đơn giản trong 6 bước ra cho ra kết quả.
        Màn hình lớn với hai nút bấm giúp dễ dàng đọc kết quả.
        Có thể đo trong máy và ngoài máy."
    ),
    6 => array(
        'id' => 6,
        'cat_id' => 2,
        'product_name' => "Máy đo đường huyết Accu Chek Guide",
        'price' => 1499000,
        'code' => 'dat#6',
        'desc' => 'Máy đo đường huyết Accu Chek Guide được xem là một trong những chiếc máy đo đường huyết tốt nhất hiện nay với bộ máy hoạt động thông minh, cho kết quả cực nhanh, cực chính xác. Nếu bạn đang băn khoăn không biết máy đo đường huyết loại nào tốt thì chiếc máy này là một lựa chọn hoàn hảo.',
        'thumb' => 'assets/img/product/2_product3.jpg',
        'product_show' => " Thông số kỹ thuật của máy đo tiểu đường Accu Chek Guide:
        Tên sản phẩm: Máy đo đường huyết Accu-Chek® Guide
        Xuất xứ: Roche – Mỹ
        Tự động khởi động khi gắn que thử vào máy
        Tự động tắt máy khi rút que thử ra
        Tự động tắt máy sau 2 phút nếu không sử dụng
        Nguồn năng lượng: 1 pin ( loại CR 2032)
        Tuổi thọ của pin: 1 viên pin có thể đo được 1.000 que thử hoặc khoảng 1 năm
        Thời gian đo: 5 giây.
        Nhiệt độ tốt nhất: Khi hoạt động:+6° đến + 44°C.
        Điều kiện bảo quản máy: 25°C đến +70°C không có pin trong máy,-10°C đến +50°C có pin trong máy
        Giới hạn độ ẩm cho máy hoạt động: 10-90%.
        Trọng lượng máy: tương đương 62g kèm pin.
        Truyền dữ liệu: Truyền dữ liệu vào máy tính thông qua cổng hồng ngoại.
        Phương pháp đo: đo điện cực.
        Tính kết quả trung bình của 7, 14, 30 ngày đo."
    ),
    7 => array(
        'id' => 7,
        'cat_id' => 3,
        'product_name' => "Nhiệt kế điện tử đo trán Microlife FR1MF1",
        'price' => 900000,
        'code' => 'dat#7',
        'desc' => 'Nhiệt kế hồng ngoại đo trán Microlife FR1MF1 là sản phẩm đo thân nhiệt cao cấp của Microlife, được thiết kế sang trọng, công nghệ cảm ứng nhiệt hồng ngoại vùng trán thông minh không cần chạm, cho kết quả nhanh và chính xác trong 3 giây.',
        'thumb' => 'assets/img/product/3_product1.jpg',
        'product_show' => " Đo thân nhiệt cho bé ngay cả khi không cần chạm!   

        Nhiệt kế hồng ngoại Microlife FR1MF1 ứng dụng công nghệ cảm biến tiên tiến nhất, đo không cần chạm, không tiếp xúc với cơ thể ở khoảng cách 1-3 cm. Đo thân nhiệt cho bé ngay cả khi bé đang ngủ, không còn làm phiền đến cơ thể.
        
        Đo thân nhiệt nhanh trong 3 giây – Bạn kiểm soát được việc quan trọng nhất!
        
        Nhiệt kế đo trán Microlife FR1MF1 giúp kiểm soát thân nhiệt cho kết quả chính xác đáng tin cậy trong 1 giây. Kiểm soát nhiệt độ cơ thể khi bị nóng sốt là điều cực kỳ quan trọng để tránh các biến chứng nguy hiểm do sốt gây ra.
        
        Độ chính xác được kiểm nghiệm lâm sàng
        
        Nhiệt kế hồng ngoại Microlife FR1MF1 đã được kiểm nghiệm lâm sàng tại Châu Âu và được các bác sỹ khuyên dùng . Chức năng cảnh báo sốt 10 tiếng bíp nhanh liên tục kèm theo màn hình chuyển sang màu đỏ khi nhiệt độ lên cao quá 37.5 độ C"
    ),
    8 => array(
        'id' => 8,
        'cat_id' => 3,
        'product_name' => "Nhiệt kế điện tử Yuwell YT1",
        'price' => 749000,
        'code' => 'dat#8',
        'desc' => 'Nhiệt kế điện tử chính hãng Yuwell YT1
        - Sản phẩm chính hãng, nhập khẩu và phân phối chính ngạch, đảm bảo chất lượng.
        - Bảo hành tại các trung tâm bảo hành chính hãng trên toàn quốc',
        'thumb' => 'assets/img/product/3_product2.jpg',
        'product_show' => " Công dụng và tính năng sản phẩm:
        - Sản phẩm không chứa thủy ngân, sử dụng tia hồng ngoại và không gây hại cho người sử dụng
        - Màn hình lớn
        - Cách đo: đo ở trán khoảng cách 0-5cm
        - Thời gian đo: 2 ses ± 1 ses
        - Khoảng nhiệt độ: 32 ~ 43 độ C
        - Sai số: 0.2 độ C (35 ~ 42 độ C) và 0.3 cái dãi đo còn lại
        - Chuyển đổi đơn vị đo: độ F và độ C
        - Công nghệ máy tính siêu nhỏ"
    ),
    9 => array(
        'id' => 9,
        'cat_id' => 3,
        'product_name' => "Nhiệt kế điện tử Omron MC 246",
        'price' => 109000,
        'code' => 'dat#9',
        'desc' => 'Nhiệt kế điện tử hiện số MC-246, dễ sử dụng và đảm bảo vệ sinh, là sản phẩm lý tưởng cho việc chăm sóc sức khỏe gia đình bạn.',
        'thumb' => 'assets/img/product/3_product3.jpg',
        'product_show' => " Tính năng nổi bật:
        Có thể đo ở miệng, nách hoặc hậu môn.
        Chính xác hơn tới 0.1oC
        Đo nhanh, sau 60 giây.
        Có nhớ kết quả đo trước
        Có tín hiệu báo kết quả
        Không thấm nước
        Thông số kỹ thuật:
        Kích thước máy: 19,4 (rộng) x 132,5 (dài) x 10 (dầy) mm
        Trọng lượng: 11g(cả pin)
        Tuổi thọ pin khoảng 2 năm
        Kết quả hiện 3 chữ số + oC  và 0,1 0c
        Phụ kiện kèm theo
        Túi đựng.
        Hướng dẫn sử dụng.
        5 vỏ bọc đầu đo.
        Các phụ kiện khác."
    ),
);
