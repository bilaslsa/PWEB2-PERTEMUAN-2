<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Define the skill scores
$ar_skill = [
    "HTML" => 10, 
    "CSS" => 20, 
    "JavaScript" => 30, 
    "RWD Bootsrap" => 40, 
    "PHP" => 50, 
    "Python" => 60, 
    "Java" => 70
];

// Initialize variables
$nim = $_POST['nim'] ?? '';
$nama = $_POST['namaLengkap'] ?? '';
$jenisKelamin = $_POST['jenisKelamin'] ?? '';
$programStudi = $_POST['programStudi'] ?? '';
$skills = $_POST['skill'] ?? [];
$email = $_POST['email'] ?? '';

// Calculate total score
$totalSkillScore = 0;
foreach ($skills as $skill) {
    if (isset($ar_skill[$skill])) {
        $totalSkillScore += $ar_skill[$skill];
    }
}

// Determine skill category
$skillCategory = "";
if ($totalSkillScore >= 150) {
    $skillCategory = "Sangat Baik";
} elseif ($totalSkillScore >= 100) {
    $skillCategory = "Baik";
} elseif ($totalSkillScore >= 50) {
    $skillCategory = "Cukup";
} else {
    $skillCategory = "Kurang";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Output</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container px-5 my-5">
    <h2>Form Output</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>NIM:</strong> <?php echo htmlspecialchars($nim); ?></li>
        <li class="list-group-item"><strong>Nama:</strong> <?php echo htmlspecialchars($nama); ?></li>
        <li class="list-group-item"><strong>Jenis Kelamin:</strong> <?php echo ($jenisKelamin == 'Laki-laki' ? 'L' : 'P'); ?></li>
        <li class="list-group-item"><strong>Program Studi:</strong> <?php echo htmlspecialchars($programStudi); ?></li>
        <li class="list-group-item"><strong>Skill:</strong> <?php echo implode(", ", $skills); ?></li>
        <li class="list-group-item"><strong>Skor Skill:</strong> <?php echo $totalSkillScore; ?></li>
        <li class="list-group-item"><strong>Kategori Skill:</strong> <?php echo $skillCategory; ?></li>
        <li class="list-group-item"><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></li>
    </ul>
</div>
</body>
</html>

</body>
</html>