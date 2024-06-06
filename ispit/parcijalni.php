<?php

const FILE_PATH = __DIR__ . "/ispit/words.json";
$words = [];

// kreiraj direktorij
if (!is_dir('ispit')) {
    mkdir('ispit');
}

// pročitaj words.json i dohvati podatke
if (file_exists(FILE_PATH)) {
    $json = file_get_contents(FILE_PATH);
    $words = json_decode($json, true);
}

// Podnesi formu
if (!empty($_POST['word'])) {

    $word = $_POST['word'];
    $len = mb_strlen($word);
    $vowels = vowels($word);
    $consonants = consonants($word);

    // asocijativni niz
    $words[] = [
        'word' => $word,
        'len' => $len,
        'consonants' => $consonants,
        'vowels' => $vowels
    ];

    // zapisivanje u words.json
    $json = json_encode($words);
    file_put_contents(FILE_PATH, $json);
}
// vowels
function vowels(string $word): int
{
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

    $count = 0;
    $len = mb_strlen($word);

    for ($i = 0; $i < $len; $i++) {
        if (in_array($word[$i], $vowels)) {
            $count++;
        }
    }

    return $count;
}

// consonants
function consonants(string $word): int
{
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

    $count = 0;
    $len = mb_strlen($word);

    for ($i = 0; $i < $len; $i++) {
        if (!in_array($word[$i], $vowels)) {
            $count++;
        }
    }

    return $count;
}

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Parcijalni ispit</title>
    <brove></brove>

</head>

<body>

    <form method='POST'>
        <label for='word'>Upišite riječ:</label><br>
        <input type='text' id='word' name='word'><br><br>
        <input type='submit' value='pošalji'>

        <?php

        if (empty($_POST['word'])) {
            $text = returnText();
            echo $text;
        }
        function returnText(): string
        {
            return 'Unos riječi je obavezan!';
        }
        ?>

    </form>

    <table border='1'>
        <thead>
            <tr>
                <th>Riječ</th>
                <th>Broj slova</th>
                <th>Broj suglasnika</th>
                <th>Broj samoglasnika</th>
            </tr>
        </thead>
        <tbody>



            <?php foreach ($words as $word) : ?>
                <tr>
                    <td><?php echo $word['word']; ?></td>
                    <td><?php echo $word['len']; ?></td>
                    <td><?php echo $word['consonants']; ?></td>
                    <td><?php echo $word['vowels']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>