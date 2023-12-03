<style>
    .mainallsanpham {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .cart {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 80%;
        box-sizing: border-box;
    }

    .boxtitle {
        background-color: #4caf50;
        color: #fff;
        padding: 10px;
        border-radius: 8px 8px 0 0;
        text-align: center;
    }

    .boxcontent table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .boxcontent th,
    .boxcontent td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }

    .boxcontent th {
        background-color: #4caf50;
        color: white;
    }

    .row.mb.bill {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .row.mb.bill a,
    .row.mb.bill input {
        text-decoration: none;
        background-color: #4caf50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    .row.mb.bill a:hover,
    .row.mb.bill input:hover {
        background-color: #45a049;
    }
</style>


<div class="mainallsanpham">
<div class="cart">
<div class="boxtitle"><h3>Bag</h3></div>
<div class="row boxcontent cart">
    <table>
        <tr>
            <th>HÌNH</th>
            <th>SẢN PHẨM</th>
            <th>DƠN GIÁ</th>
            <th>SỐ LƯỢNG</th>
            <th>THÀNH TIỀN </th>
            <th>THAO TÁC</th>
        </tr>
        <?php
        viewcart1();
      ?>
    </table>
</div>
<div class="row mb bill">
<a href="index.php?act=bill"><input type="submit" value="ĐỒNG Ý ĐẶT HÀNG"></a> <a href="index.php?act=delcart"><input type="button" value="XÓA GIÓ HÀNG"></a>
</div>
</div>
</div>

