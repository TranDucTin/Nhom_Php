<?php 
echo "
<tr>
                                    <td>$row[0]</td>
                                    <td>$row[1]</td>
                                    <td>$row[2]</td>
                                    <td>$row[3]</td>
                                    <td>
                                        <a href='edit.php?id=$row[0]' class='edit-btn'><abbr
                                                title='Cập nhật dữ liệu'><img src='../../images/edit.png' width='20'
                                                    height='20' /></abbr></a>
                                        <a href='detail.php?id=$row[0]' class='edit-btn'><abbr
                                                title='Xem chi tiết'><img src='../../images/details.png' width='20'
                                                    height='20' /></abbr></a>
                                    </td>
                                </tr>
";
?>