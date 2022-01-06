<?php include("template/header.php"); ?>
    <form method="post">
        <input type="text" placeholder="Tên môn học" name="txtName">
        <input type="text" placeholder="Số tín chỉ" name="txtTC">
        <input type="text" placeholder="Số tiết lý thuyết" name="txtTLT">
        <input type="text" placeholder="Số tiết bài tập" name="txtTBT">
        <input type="text" placeholder="Số tiết thực hành-thí nghiệm" name="txtTTHTN">
        <input type="text" placeholder="Số giờ tự học" name="txtGTH">
        <button type="submit">Lưu</button>
    </form>
<?php include("template/footer.php"); ?>