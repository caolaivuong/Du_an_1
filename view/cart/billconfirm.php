<main class="catalog mb ">
    <div class="boxleft">
        <?php
        if (isset($bill) && (is_array($bill))) {
            extract($bill);
            $pttt = get_pttt($bill['bill_pttt']);
        }
        ?>
        <div class="mb">
            <div class="box_title"></div>
            <div class="box_content">
                <center>
                    <h2>Cảm ơn quý khách đã đặt hàng!</h2>
                </center>
            </div>
        </div>
        <div class="text-center">
            <h2 class="badge text-bg-success">THÔNG TIN ĐƠN HÀNG</h2>
            <div class="box_content" style="text-align: center;">
                <p>Mã Đơn Hàng:DVT-
                    <?= $bill['id']; ?>
                </p>
                <p>Ngày đặt hàng:
                    <?= $bill['ngaydathang']; ?>
                </p>
                <p>Tổng đơn hàng:
                    <?= $bill['total']; ?>đ
                </p>
                <p>PTTT:
                    <?= $pttt; ?>
                </p>
            </div>
        </div>
        <main class="catalog mb">

            <div class="text-center">
                <div class="">
                    <span class="badge text-bg-success ">THÔNG TIN ĐẶT HÀNG</span>
                    <div class="box_content container ">
                        <table class="table table-hover text-center">
                                <tr>
                                    <td>Tên khách hàng</td>
                                    <td>
                                        <?= $bill['bill_user']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ</td>
                                    <td>
                                        <?= $bill['bill_address']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <?= $bill['bill_email']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Số điện thọai</td>
                                    <td>
                                        <?= $bill['bill_tel']; ?>
                                    </td>
                                </tr>
                            </table>
                    </div>
                </div>
            </div>
            <main class="catalog mb">
                <div class="text-center">
                    <div class="">
                        <span class="badge text-bg-success ">CHI TIẾT GIỎ HÀNG</span>
                        <div class="box_content container">
                            <table class="table table-hover">
                                <?php
                                    bill_chi_tiet($billct);
                                ?>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="mb2 text-center">
                    <a href="index.php"><input type="button" value="Về trang chủ" class="btn btn-primary" ></a>
                </div>
    </div>
    <?php
        include "view/boxright.php";
    ?>
</main>