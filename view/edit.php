<?php include("template/header.php"); ?>
    <form method="post">
        <input type="text" placeholder="Tên môn học" name="txtName" value="<?php echo $data['bd_name']; ?>">
        <input type="text" placeholder="Số tín chỉ" name="txtTC" value="<?php echo $data['bd_TC']; ?>">
        <input type="text" placeholder="Số tiết lý thuyết" name="txtTLT" value="<?php echo $data['bd_TLT']; ?>">
        <input type="text" placeholder="Số tiết bài tập" name="txtTBT" value="<?php echo $data['bd_TBT']; ?>">
        <input type="text" placeholder="Số tiết thực hành-thí nghiệm" name="txtTTHTN" value="<?php echo $data['bd_TTHTN']; ?>">
        <input type="text" placeholder="Số giờ tự học" name="txtGTH" value="<?php echo $data['bd_GTH']; ?>">
        <button type="submit">Lưu</button>
    </form>
<?php include("template/footer.php"); ?>