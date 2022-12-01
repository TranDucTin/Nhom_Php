<?php 
if($row[7]=="PM-001") {
    $giotinh = "Thanh toán tiền mặt";
}else{
    $giotinh = "Thanh toán online";
}
echo "

<tr class='alternatingRowStyle'>
                                <td>$row[0]</td>
                                <td>$row[9]</td>
                                <td>$giotinh</td>
                                <td>$row[1]</td>
                                <td>$row[2]</td>
                                <td>$row[4]</td>
                                <td>$row[5]</td>
                                <td>
                                    <a href='./detail.php?id=$row[0]' class='edit-btn'><abbr
                                            title='Xem chi tiết'><img src='../../images/details.png' width='20'
                                                height='20' /></abbr></a>
                                    <a href='./action.php?delete=$row[0]' Onclick='return ConfirmDelete();' class='edit-btn'><abbr
                                            title='Hủy đơn hàng'><img src='../../images/delete.png' width='20'
                                                height='20' /></abbr></a>
                                </td>
                            </tr>
";

?>
<script>
function ConfirmDelete() {
    var x = confirm("Are you sure you want to delete?");
    if (x)
        return true;
    else
        return false;
}
</script>