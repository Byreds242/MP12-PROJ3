<!-- filepath: /c:/xampp/htdocs/e-comerce/templates/product.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <style>
        .product-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .product-item {
            border: 1px solid #ccc;
            padding: 10px;
            width: 200px;
            text-align: center;
        }
        .product-item img {
            max-width: 100%;
        }
    </style>
</head>
<body>
    <?php include '../includes/get_products.php'; ?>
    <div class="product-container">
        <?php foreach ($productos as $producto): ?>
            <div class="product-item">
                <img src="<?php echo htmlspecialchars($producto['imagen']); ?>" alt="<?php echo htmlspecialchars($producto['nombre']); ?>">
                <h2><?php echo htmlspecialchars($producto['nombre']); ?></h2>
                <p>Precio: $<?php echo htmlspecialchars($producto['precio']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>