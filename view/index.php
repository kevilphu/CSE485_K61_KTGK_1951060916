<?php include("template/header.php"); ?>
    <table class="table" style="text-align:center; margin:10px;">
            <thead>
                <tr>
                    <th scope="col">Mã môn học</th>
                    <th scope="col">Tên môn học</th>
                    <th scope="col">Số tín chỉ</th>
                    <th scope="col">Số tiết lý thuyết</th>
                    <th scope="col">Số tiết bài tập</th>
                    <th scope="col">Số tiết thực hành-thí nghiệm</th>
                    <th scope="col">Số giờ tự học</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($datas as $data){
                ?>
                    <tr>
                    <th scope="row"><a href="index.php?act=details&id=<?php echo $data['mamh']; ?>"><?php echo $data['mamh']; ?></a></th>
                    <td><a href="index.php?act=details&id=<?php echo $data['mamh']; ?>"><?php echo $data['ten_mh']; ?></a></td>
                    <td><a href="index.php?act=details&id=<?php echo $data['mamh']; ?>"><?php echo $data['sotinchi']; ?></a></td>
                    <td><a href="index.php?act=details&id=<?php echo $data['mamh']; ?>"><?php echo $data['sotiet_lt']; ?></a></td>
                    <td><a href="index.php?act=details&id=<?php echo $data['mamh']; ?>"><?php echo $data['sotiet_bt']; ?></a></td>
                    <td><a href="index.php?act=details&id=<?php echo $data['mamh']; ?>"><?php echo $data['sotiet_thtn']; ?></a></td>
                    <td><a href="index.php?act=details&id=<?php echo $data['mamh']; ?>"><?php echo $data['sogio_tuhoc']; ?></a></td>
                    <td><a href="index.php?act=edit&id=<?php echo $data['mamh']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                    <td><a href="index.php?act=delete&id=<?php echo $data['mamh']; ?>"><i class="bi bi-trash"></i></a></td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
    </table>
    <div>
        <a class="btn btn-primary" href="index.php?act=add" style="margin-left:40px">Thêm</a>
    </div>
<?php include("template/footer.php"); ?>