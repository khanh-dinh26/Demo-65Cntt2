<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="8" cellspacing="0" align="center">
        <tr align="center" bgcolor="#f2f2f2">
            <th>STT</th>
            <th>Họ và tên</th>
            <th>MSSV</th>
        </tr>

        <?php
            $thanh_vien = [
                ["ten" => "Nguyễn Đình Khánh", "mssv" => "65131460"],
                ["ten" => "Võ Nhật Lâm",  "mssv" => "65131638"],
                ["ten" => "Huỳnh Tuấn Ngọc",    "mssv" => "65132224"],
                ["ten" => "Nguyễn Văn A", "mssv" => "00000000"],
                ["ten" => "Nguyễn Nhật Khánh Duy",  "mssv" => "65130634"],
                ["ten" => "Lê Văn C",    "mssv" => "00000000"],
            ];

            $stt = 1;
            foreach ($thanh_vien as $tv) {
                echo "<tr align='center'>";
                echo "<td>" . $stt++ . "</td>";
                echo "<td>" . $tv['ten'] . "</td>";
                echo "<td>" . $tv['mssv'] . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>