<?php
echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Story 2</title>";
echo "<link rel='stylesheet' href='styles.css'>";
echo "</head>";
echo "<body class='light-mode'>";
echo "<div class='header'>";
echo "<div>Story 2: The Crystal Cavern</div>";
echo "<img id='darkModeToggle' src='moon.png' alt='Dark Mode' class='dark-mode-icon' title='Toggle Dark Mode' style='width:20px; cursor: pointer;' onclick='toggleDarkMode()'>";
echo "</div>";

$sections = [
    "The cavern sparkled with the light of a thousand crystals, casting rainbows everywhere.",
    "Deeper in the cavern, you discover an ancient treasure guarded by a riddle...",
    "The answer unlocks a portal, leading you back to the main hall."
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
