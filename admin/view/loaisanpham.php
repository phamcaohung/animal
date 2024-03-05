<div class="container-fluid" style="background-color: #28292d;height: 100%;">
        <div class="container">
            <h2 class="text-center text-white mt-5">DANH SÁCH LOẠI HÀNG HÓA</h2>
            <div class="row mt-5">
                <div class="col-lg-6 text-center mt-4">
                    <a class="btn btn-success" href="index.php?action=loaisp&act=addloaisp">Thêm loại sản phẩm</a>
                </div>
                <div class="col-lg-6 text-center">
                    
                    <form action="index.php?action=loaisp&act=import_loai" method="post" enctype="multipart/form-data">
                        <input style="background-color: white;" type="file" name="file" id="file"><br>
                        <button class="btn btn-success mt-4" type="submit" name="submit_file">Import CSV</button>
                        <!-- <input type="submit" class="form-control-file" value="Import CSV" name="submit"> -->
                    </form>
                </div>
            </div>
            
            
        </div>
            <table class="table table-dark table-striped mt-5">
                <thead style="color: #80BB01;">
                  <tr>
                    <th>Mã loại</th>
                    <th>Tên loại</th>
                    <th>Id menu</th>
                    <th>Cập Nhật</th>
                    <th>Xóa</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        $hh = new LoaiSP();
                        $result = $hh->getListLoaiSP();
                        while($set = $result->fetch()):
                    ?>
                <tr>
                    <td><?php echo $set['maloai'];?></td>
                    <td><?php echo $set['tenloai'];?></td>
                    <td><?php echo $set['idmenu'];?></td>
                    <td><a class="btn btn-warning" href="index.php?action=loaisp&act=editloaisp&id=<?php echo $set['maloai'];?>">Cập nhật</a></td>
                    <td><a class="btn btn-danger" href="index.php?action=loaisp&act=delete&id=<?php echo $set['maloai'];?>">Xóa</a></td>
                </tr>
                    <?php
                        endwhile;
                    ?>
                </tbody>
              </table>
              
</div>