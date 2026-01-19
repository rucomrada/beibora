<?php
/**
 * Product Scanner & JSON Generator
 * Automatically scans asset/products/ folders and updates products.json
 */

require_once 'config.php';

$productsDir = 'asset/products/';
$jsonFile = 'products.json';

// Load existing JSON or create new structure
if (file_exists($jsonFile)) {
    $data = json_decode(file_get_contents($jsonFile), true);
} else {
    $data = [
        'categories' => [],
        'products' => []
    ];
}

// Ensure categories exist
if (!isset($data['categories'])) {
    $data['categories'] = [
        'section_a' => [
            'name' => 'Oils & Fats',
            'icon' => 'fas fa-oil-can',
            'description' => 'Premium cooking oils, fats, and margarine',
            'gradient' => 'from-amber-50 to-orange-50'
        ],
        'section_b' => [
            'name' => 'Commodities',
            'icon' => 'fas fa-bread-slice',
            'description' => 'Rice, flour, sugar, and essential staples',
            'gradient' => 'from-yellow-50 to-amber-50'
        ],
        'section_c' => [
            'name' => 'Cleaning & Laundry',
            'icon' => 'fas fa-broom',
            'description' => 'Detergents, soaps, and cleaning agents',
            'gradient' => 'from-blue-50 to-cyan-50'
        ],
        'section_d' => [
            'name' => 'Dairy Products',
            'icon' => 'fas fa-cheese',
            'description' => 'Milk, butter, yoghurt, and cheese',
            'gradient' => 'from-purple-50 to-pink-50'
        ],
        'section_e' => [
            'name' => 'Beverages',
            'icon' => 'fas fa-mug-hot',
            'description' => 'Tea, coffee, juice, and drinking chocolate',
            'gradient' => 'from-green-50 to-teal-50'
        ],
        'section_f' => [
            'name' => 'Health & Hygiene',
            'icon' => 'fas fa-heartbeat',
            'description' => 'Personal care, diapers, and health products',
            'gradient' => 'from-red-50 to-pink-50'
        ],
        'section_g' => [
            'name' => 'Snacks & Confectionery',
            'icon' => 'fas fa-cookie-bite',
            'description' => 'Chocolates, biscuits, and sweet treats',
            'gradient' => 'from-orange-50 to-red-50'
        ]
    ];
}

// Scan directories and build product list
$products = [];
$sections = ['section_a', 'section_b', 'section_c', 'section_d', 'section_e', 'section_f', 'section_g'];

foreach ($sections as $section) {
    $sectionPath = $productsDir . $section;
    
    if (is_dir($sectionPath)) {
        $files = scandir($sectionPath);
        $files = array_diff($files, ['.', '..']);
        
        foreach ($files as $file) {
            $filePath = $sectionPath . '/' . $file;
            
            // Only process image files
            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                // Extract product name from filename (remove extension)
                $productName = pathinfo($file, PATHINFO_FILENAME);
                
                // Clean up the name (replace underscores/hyphens with spaces, capitalize)
                $cleanName = ucwords(str_replace(['_', '-'], ' ', $productName));
                
                $products[] = [
                    'id' => $section . '_' . pathinfo($file, PATHINFO_FILENAME),
                    'name' => $cleanName,
                    'category' => $section,
                    'image' => $productsDir . $section . '/' . $file,
                    'description' => 'Premium ' . strtolower($cleanName) . ' available in various sizes.',
                    'searchTerms' => strtolower($cleanName . ' ' . $file)
                ];
            }
        }
    }
}

// Update products in data
$data['products'] = $products;
$data['last_updated'] = date('Y-m-d H:i:s');
$data['total_products'] = count($products);

// Save to JSON file
file_put_contents($jsonFile, json_encode($data, JSON_PRETTY_PRINT));

echo "Products JSON updated successfully!\n";
echo "Total products: " . count($products) . "\n";
echo "Categories: " . count($data['categories']) . "\n";
?>
