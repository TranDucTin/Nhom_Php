<?php 
echo "
<tr>
                                    <td>$row[0]</td>
                                    <td>$row[6]</td>
                                    <td>$row[9]</td>
                                    <td>$row[8]</td>
                                    <td>$row[1]</td>
                                    <td>$row[2]</td>
                                    <td>$row[5]</td>
                                    <td>$row[3]</td>

                                    <td>

                                        <a href='detail.php?id=$row[0]' class='edit-btn'><abbr
                                                title='Xem chi tiết'><img src='../../images/details.png' width='20'
                                                    height='20' /></abbr></a>
                                    </td>
                                </tr>
";
?>