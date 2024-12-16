<?php
echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Story 3</title>";
echo "<link rel='stylesheet' href='styles.css'>";
echo "</head>";
echo "<body class='light-mode'>";
echo "<div class='header'>";
echo "<div>Story 3: The Lost City</div>";
echo "<img id='darkModeToggle' src='moon.png' alt='Dark Mode' class='dark-mode-icon' title='Toggle Dark Mode' style='width:20px; cursor: pointer;' onclick='toggleDarkMode()'>";
echo "</div>";

$sections = [
    "In the heart of the desert lies a lost city, its golden spires shimmering in the sun.",
    "You explore the city, uncovering ancient secrets and forgotten relics...",
    "A hidden passage leads you to a mysterious artifact, and a door back home."
];

foreach ($sections as $index => $content) {
    $display = $index === 0 ? "active" : "hidden";
    $layout = $index % 2 === 0 ? "row" : "row-reverse";
    echo "<div class='story-section $display' style='flex-direction: $layout;'>";
    echo "<p>$content</p>";
    if ($index < count($sections) - 1) {
        echo "<button onclick='nextSection($index)'><span></span>Next</button>";
    } else {
        echo "<a href='index.html' class='door'><img src='door.png'>Return</a>";
    }
    echo "</div>";
}

echo "<script>
function toggleDarkMode() {
    document.body.classList.toggle('dark-mode');
}

let currentSection = 0;
function nextSection(index) {
    const sections = document.querySelectorAll('.story-section');
    sections[index].classList.remove('active');
    sections[index].classList.add('hidden');
    sections[index + 1].classList.remove('hidden');
    sections[index + 1].classList.add('active');
}
</script>";
echo "</body>";
echo "</html>";
