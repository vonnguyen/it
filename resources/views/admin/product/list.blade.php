@extends('layouts/admin')

@section('content')
<div class="">
    <div class="frmtitle">
        <h1>DANH SÁCH SẢN PHẨM</h1>
    </div>
    <div class="frmcontent">
            <div class="row mb10 pb-2" style = "width:100%; margin:auto; ">
                 Tên loại danh mục<br>
                <select class="form-select" style = "width:100%;
                                                    padding: 5px;
                                                    border-radius: 5px;" 
                    name= "product" aria-label="Default select example">
                    {{-- <?php 
                        foreach($listProduct['product'] as $item){
                            echo '<option value="'.$item['id'].'">'.$item['name'].'</option>';
                        }
                    ?>                    --}}
                </select>
            </div>
        <div class="mb10 frmdsloai text-center">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ SẢN PHẨM</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>GIÁ</th>
                    <th>HÌNH</th>
                    <th>LƯỢT XEM</th>
                    <th>MÔ TẢ</th>
                    <th></th>
                </tr>
                <?php
                if (!empty($listProduct)) {

                    foreach ($listProduct as $item) {
                        echo '<tr>
                        <td><input type="checkbox" name="" id="" /></td>
                        <td>' . $item['id'] . '</td>
                        <td>' . $item['name'] . '</td>
                        <td>' . $item['gia'] . '</td>
                        <td><img style = "object-fit:cover;width:200px" src="'.$item['image'].'" /></td>
                        <td>' . $item['luotxem'] . '</td>
                        <td>' . $item['mota'] . '</td>
                        <td>
                            <a href="'.route('admin.product.showupdate',$item['id']).'"><input type="button" value="Sửa" /></a>
                            <a href=" '.route('admin.product.delete', $item['id']).' "><input type="button" value="Xóa" /></a>
                        </td>
                    </tr>';
                    }
                }

                ?>


            </table>
        </div>
        <div class="mb10">
            <input type="button" value="Chọn tất cả" />
            <input type="button" value="Bỏ chọn tất cả" />
            <input type="button" value="Xóa các mục đã chọn" />
            <a href="{{route('admin.product.add')}}"><input type="button" value="Nhập thêm" /></a>
        </div>
    </div>
</div>
@endsection
