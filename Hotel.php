<?php
$town="Colombo";
function getHotelInfo($town) {
    
    $hotels = array(
        "Colombo" => array(
            "Hotel Shangrila" => "Spacious wedding rooms with catering services.",
            "Hotel Kingsbury" => "Elegant wedding halls with customizable decorations."
        ),
        "Kandy" => array(
            "Hotel Helabojun" => "Picturesque wedding venues with scenic views.",
            "Hotel Awulupath" => "Traditional wedding packages with cultural performances."
        ),
        
    );

    
    if (array_key_exists($town, $hotels)) {
        return $hotels[$town];
    } else {
        return "Sorry, no hotel information available for $town.";
    }
}


if (isset($_GET['town'])) {
    $town = $_GET['town'];
    $hotelInfo = getHotelInfo($town);
    echo "<h1>Hotel Wedding Room Facilities in $town</h1>";
    if (is_array($hotelInfo)) {
        echo "<ul>";
        foreach ($hotelInfo as $hotel => $info) {
            echo "<li><strong>$hotel:</strong> $info</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>$hotelInfo</p>";
    }
} else {
    echo "<p>Please provide a town parameter in the URL.</p>";
}
?>