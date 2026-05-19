<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Streetwear & Luxury Index</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fafafa;
            color: #1a1a1a;
            margin: 15px;
        }
        h2 {
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        table {
            border-collapse: collapse;
            margin: auto;
            width: 95%;
            background: white;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #1a1a1a;
            color: white;
            text-align: center;
            text-transform: uppercase;
            font-size: 13px;
        }
        img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            display: block;
            margin: auto;
            border: 1px solid #eee;
        }
        .brand-title {
            font-weight: bold;
            text-align: center;
            text-transform: uppercase;
        }
    </style>
</head>
<body>

<h2>Streetwear & Luxury Brand Directory</h2>

<?php

$brands = array(
    array(
        "name" => "Acne Studios", 
        "image" => "https://www.santaeulalia.com/cdn/shop/files/553-004592-01_05.jpg?v=1767045797", 
        "description" => "A luxury fashion house from Stockholm known for its multidisciplinary approach and custom denim.", 
        "fact" => "ACNE is an acronym for 'Ambition to Create Novel Expressions'."
    ),
    array(
        "name" => "Adidas", 
        "image" => "https://thumbs.dreamstime.com/b/adidas-ag-multinational-corporation-founded-headquartered-herzogenaurach-germany-designs-manufactures-shoes-139136442.jpg", 
        "description" => "The classic German sportswear titan blending legendary retro silhouettes with modern style.", 
        "fact" => "The iconic 'Three Stripes' mark was originally bought from a Finnish brand for cash and two bottles of whiskey."
    ),
    array(
        "name" => "Corteiz", 
        "image" => "https://dropoutmilano.com/cdn/shop/articles/63d79fe288915dc300e41e58_corteiz-logo-1002549_53f57982-6f15-406f-b262-db7fdbb5b93b.jpg?v=1771930848", 
        "description" => "A London-based underground streetwear label known for its intense cult following and viral geographic drops.", 
        "fact" => "Its branding prominently features Alcatraz Island, symbolizing breaking free from societal norms."
    ),
    array(
        "name" => "Essentials", 
        "image" => "https://image.goat.com/attachments/product_template_additional_pictures/images/106/451/691/medium/1422289_03.jpg.jpeg", 
        "description" => "A sub-label by Jerry Lorenzo's Fear of God, delivering highly coveted luxury basics and clean oversized cuts.", 
        "fact" => "Designed specifically to offer high-end silhouettes at an accessible price point."
    ),
    array(
        "name" => "Goyard", 
        "image" => "https://i.redd.it/kempza2h5xy01.jpg", 
        "description" => "An ultra-exclusive French luxury trunk and leather goods maker operating since the 19th century.", 
        "fact" => "They explicitly do not use traditional advertising, e-commerce, or celebrity endorsements."
    ),
    array(
        "name" => "Gucci", 
        "image" => "https://pngimg.com/uploads/gucci/gucci_PNG25.png", 
        "description" => "A high-end Italian luxury house that sets global fashion trends with maximalist and bold collections.", 
        "fact" => "The house was originally inspired by the high-end luggage founder Guccio Gucci handled."
    ),
    array(
        "name" => "Nike", 
        "image" => "https://thumbs.dreamstime.com/b/web-183282388.jpg", 
        "description" => "The global athletic powerhouse dominates both activewear and street sneaker culture.", 
        "fact" => "The iconic swoosh logo was originally designed by a student for just $35."
    ),
    array(
        "name" => "Ralph Lauren", 
        "image" => "https://static.vecteezy.com/system/resources/previews/023/869/451/non_2x/ralph-lauren-brand-symbol-with-name-logo-clothes-design-icon-abstract-illustration-free-vector.jpg", 
        "description" => "The absolute pinnacle of classic, premium American preppy style and timeless tailoring.", 
        "fact" => "Founder Ralph Lauren started his entire empire out of a single drawer selling wide ties."
    ),
    array(
        "name" => "Stüssy", 
        "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/2/22/Stussy-1.svg/1280px-Stussy-1.svg.png?utm_source=commons.wikimedia.org&utm_campaign=index&utm_content=thumbnail", 
        "description" => "The definitive California surf-and-skate brand that laid the blueprint for modern streetwear.", 
        "fact" => "The logo was born when founder Shawn Stüssy scrawled his signature on surfboards."
    ),
    array(
        "name" => "Supreme", 
        "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRprcumaouSGF5oEdH0t0lrs-QMWxizzxrOsw&s", 
        "description" => "The legendary NYC skate brand that pioneered global hype-culture and limited-edition product drops.", 
        "fact" => "Its signature red box logo font was heavily inspired by artist Barbara Kruger’s work."
    )
);
?>

<table>
    <tr>
        <th>Logo</th>
        <th>Brand Name</th>
        <th>Description</th>
        <th>Fast Facts</th>
    </tr>

    <?php foreach ($brands as $brand): ?>
        <tr>
            <td>
                <img src="<?php echo htmlspecialchars($brand['image']); ?>" alt="<?php echo htmlspecialchars($brand['name']); ?>">
            </td>
            <td class="brand-title">
                <?php echo htmlspecialchars($brand['name']); ?>
            </td>
            <td>
                <?php echo htmlspecialchars($brand['description']); ?>
            </td>
            <td>
                🔍 <?php echo htmlspecialchars($brand['fact']); ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>