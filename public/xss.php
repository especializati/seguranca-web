<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Marca
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Modelo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ano
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once __DIR__ . '/conn.php';

                $result = $conn->prepare("SELECT * FROM cars");
                $result->execute();
                $rows = $result->fetchAll(PDO::FETCH_ASSOC);
                foreach ($rows as $row) {
                ?>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo $row['id']; ?>
                        </th>
                        <td class="px-6 py-4">
                            <?=$row['brand']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['model']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?php echo $row['year']; ?>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>