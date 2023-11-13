<!-- Phần trắc nghiệm
Câu 1: 5
Câu 2: B
Câu 3: D 
Câu 4: A
Câu 5: A -->

<!-- Phần tự luận -->
<!-- Câu 1: -->
<?php
    function isPrime($n) {
        if ($n <= 1) {
            return false;
        }
        for($i = 2; $i <= sqrt($n); $i++){
        if($n % $i == 0){
            return false;
        }
    }
    return true;
}
echo "Các cố nguyên tố từ 1 đến 100 là: <br>";
for($i = 1; $i <= 100; $i++){
    $check = isPrime($i);
    if($check == true){
        echo $i." ";
    }
}
?>

<!-- Câu 2: -->
<?php
$products = [
    ['name' => 'Tablet', 'price' => 50, 'quantity' => 5],
    ['name' => 'Smartphone', 'price' => 60, 'quantity' => 6],
    ['name' => 'PC', 'price' => 70, 'quantity' => 7],
];

echo "Thông tin sản phẩm là:<br>";
foreach ($products as $product) {
    echo "Tên sản phẩm: {$product['name']}, Giá: {$product['price']}, Số lượng: {$product['quantity']}<br>";
}

function totalValue($products) {
    $totalValue = 0;
    foreach ($products as $product) {
        $totalValue += $product['price'] * $product['quantity'];
    }
    return $totalValue;
}

echo "Tổng giá trị của tất cả sản phẩm là: $" . totalValue($products);
?>

