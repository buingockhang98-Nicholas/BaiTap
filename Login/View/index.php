
<h1>Danh sách học sinh</h1>
<?php

$authors = array(
    array(
        'Tên' => 'Nguyễn Văn Cường',
        'Lớp' => '12a1',
        'Năm sinh' => '25/01/1998'
    ),
    array(
        'Tên' => 'Trương Phúc Hoài Minh',
        'Lớp' => '12a3',
        'Năm sinh' => '9/01/1998'
    ),
    array(
        'Tên' => 'Hoàng Văn Tuyền',
        'Lớp' => '12a8',
        'Năm sinh' => '2/06/1998'
    ),
    array(
        'Tên' => 'Nguyễn Tình',
        'Lớp' => '12a9',
        'Năm sinh' => '25/06/1998'
    )
);
echo '<ul>';
foreach ($authors as $key => $author)
{
    echo '<li>';
    echo 'Tên: ' . $author['Tên'] . '<br/>';
    echo 'Lớp: ' . $author['Lớp'] . '<br/>';
    echo 'Năm sinh: ' . $author['Năm sinh'] . '<br/>';
    echo '</li>';
}
echo '</ul>';
?>  