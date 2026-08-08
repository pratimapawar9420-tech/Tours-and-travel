<?php
// Check if 'location' parameter is provided
if (isset($_GET['location'])) {
    // Get the submitted location
    $location = htmlspecialchars($_GET['location']);
    
    // Process the location (e.g., matching with a list of valid locations)
    // For example, let's just echo the location:
    echo "You searched for location: " . $location;
    
    // Example: Match the location against a predefined list
    $valid_locations = ["Nashik", "Mumbai", "Pune", "Delhi"];
    
    if (in_array($location, $valid_locations)) {
        echo "<br>Location is valid.";
    } else {
        echo "<br>Location not found in the list.";
    }
} else {
    echo "Please enter a location.";
}
?>
